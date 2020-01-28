<?php

namespace Swissport\ReadAndSignBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\File\File;

class ImportExcel extends ContainerAwareCommand {

    private $container;
    private $entityManager;


    protected function configure()
    {
        $this->setName('tun-exp:importExcel')
            ->setDescription('Import all data from excel file')
            ->setDefinition(
                new InputDefinition(array(
                    new InputOption('file', 'f', InputOption::VALUE_REQUIRED)
                ))
            );
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->container = $this->getContainer();
        $this->entityManager = $this->getContainer()->get('doctrine')->getManager();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //start couting time
        $this->tsStartInitCommand = microtime(true);

        if (!$input->hasOption('file') || $input->getOption('file') === ""){
            throw new \Exception('Invalid input file option!');
        }

        $output->writeln('Start process of upload file!');
        $pathFile = $input->getOption('file');

        //already validates if the file exists or not
        $file = new File($pathFile);
        $mime = $file->getMimeType();

        //validte file extension
        $error = '';
        if ($mime != 'text/plain') {
            $error = 'File extension not allowed';
        }

        if (!empty($error)) {
            $output->writeln('Processing file <info>' . $pathFile . '</info>, not possible. Error: <error>' . $error . '</error>');
        } else {

        }
    }
}