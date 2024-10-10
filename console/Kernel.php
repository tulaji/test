<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Illuminate\Database\Capsule\Manager as DB;
class Kernel extends Command
{
    protected static $defaultName = 'schedule:run';
    protected $settings;
    protected $_L;
    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('This command is needed for the automation.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command is needed for the automation.');
    }

    protected function appInit(): void
    {
        $db_config = [
            'driver' => 'mysql',
            'host' => DB_HOST,
            'database' => DB_NAME,
            'username' => DB_USER,
            'password' => DB_PASSWORD,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ];

        $db = new DB();
        $db->addConnection($db_config);
        $db->setAsGlobal();
        $db->bootEloquent();

        $settings = AppConfig::all();
        $settings_key_values = [];
        foreach ($settings as $setting) {
            $settings_key_values[$setting->setting] = $setting->value;
        }

        $this->settings = $settings_key_values;
        $language_file_path =
            'system/i18n/' . $this->settings['language'] . '.php';

        if (file_exists($language_file_path)) {
            $_L = require $language_file_path;
        } else {
            $_L = 'system/i18n/en.php';
        }

        $overrides_language_strings = [];

        if (file_exists('system/overrides/i18n.php')) {
            $overrides_language_strings = require 'system/overrides/i18n.php';
        }

        $this->_L = array_merge($_L, $overrides_language_strings);
        require 'system/helpers/common_functions.php';
    }

    protected function settings_exist_and_true($key)
    {
        if (isset($this->settings[$key]) && $this->settings[$key]) {
            return true;
        }
        return false;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->appInit();
        if ($this->settings['url_rewrite'] == '1') {
            define('BASE_URL', APP_URL . '/');
        } else {
            define('BASE_URL', APP_URL . '/?ng=');
        }
        $daily_tasks = new Cron\CronExpression('@daily');
        if ($daily_tasks->isDue()) {
            $log = '';
            Invoice::generateRecurringInvoices($this->settings, $this->_L);
            if (
                $this->settings_exist_and_true('task_daily_accounting_snapshot')
            ) {
                Account::createSnapshot();
            }
            if (
                $this->settings_exist_and_true(
                    'task_automatic_payment_reminder'
                )
            ) {
                Invoice::sendPaymentReminder($this->settings, $this->_L);
            }
        }

        return Command::SUCCESS;
    }
}
