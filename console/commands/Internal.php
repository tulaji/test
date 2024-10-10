<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class Internal extends Command
{
    protected static $defaultName = 'update:app';
    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('This command is needed for the automation.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command is needed for the automation.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ... put here the code to run in your command

        $capsule = new DB();

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => DB_HOST,
            'database' => DB_NAME,
            'username' => DB_USER,
            'password' => DB_PASSWORD,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();

        $tables = $capsule::select('SHOW TABLES');
        foreach ($tables as $table) {
            foreach ($table as $key => $value) {
                $output->writeln($value);

                $has_column = $capsule::select(
                    'SHOW COLUMNS FROM `' . $value . '` LIKE \'workspace_id\''
                );

                if (count($has_column) === 0) {
                    $capsule::statement(
                        'ALTER TABLE `' .
                            $value .
                            '` ADD `workspace_id` INT(11) NOT NULL DEFAULT \'0\' AFTER `id`'
                    );
                }
            }
        }

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;
    }
}
