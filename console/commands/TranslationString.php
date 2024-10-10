<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
class TranslationString extends Command
{
    protected static $defaultName = 'add-translate-string';
    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('This command is needed for the automation.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command is needed for the automation.');
        $this
            // ...
            ->addArgument('string', InputArgument::REQUIRED, 'String');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Added String: ' . $input->getArgument('string'));

        return Command::SUCCESS;
    }
}
