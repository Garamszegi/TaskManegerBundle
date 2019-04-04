<?php

namespace Garamszegi\TaskManagerBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\StreamOutput;

/**
 * Description of ExecuteCommand
 *
 * @author Garamszegi Erik
 */
class ExecuteCommand extends Command {

    /**
     *
     * @var string
     */
    private $logPath;

    public function __construct($logPath) {
        $this->logPath = $logPath;

        if (false !== $this->logPath) {
            $this->logPath = rtrim($this->logPath, '/\\') . DIRECTORY_SEPARATOR;
        }

        parent::__construct();
    }

    protected function configure() {
        $this
                ->setName('scheduler:execute')
                ->setDescription('Execute scheduled commands')
                ->addOption('dump', null, InputOption::VALUE_NONE, 'Display next execution')
                ->addOption('no-output', null, InputOption::VALUE_NONE, 'Disable output message from scheduler')
                ->setHelp('This class is the entry point to execute all scheduled command');
    }

    protected function initialize(InputInterface $input, OutputInterface $output) {
        $this->dumpMode = $input->getOption('dump');

        // Store the original verbosity before apply the quiet parameter
        $this->commandsVerbosity = $output->getVerbosity();

        if (true === $input->getOption('no-output')) {
            $output->setVerbosity(OutputInterface::VERBOSITY_QUIET);
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $output->writeln('<info>Start : ' . ($this->dumpMode ? 'Dump' : 'Execute') . ' all scheduled command</info>');

        // Before continue, we check that the output file is valid and writable (except for gaufrette)
        if (false !== $this->logPath && strpos($this->logPath, 'gaufrette:') !== 0 && false === is_writable(
                        $this->logPath
                )
        ) {
            $output->writeln(
                    '<error>' . $this->logPath .
                    ' not found or not writable. You should override `log_path` in your config.yml' . '</error>'
            );

            return;
        }
    }

}
