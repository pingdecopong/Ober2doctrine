<?php

namespace Arte\Ober2doctrineBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Dumper;
use Arte\Ober2doctrineBundle\Lib\OberMngToYaml;
use Arte\Ober2doctrineBundle\Lib\OberMng;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Yaml;

class ConvertCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('arte:ober2doctrine')
            ->setDescription('Convert file from OBER to Doctrine2 YAML')
            ->addArgument('BundleName', InputArgument::REQUIRED, 'bundle name')
//            ->addArgument('oberFile', InputArgument::REQUIRED, 'ober file')
//            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //
        $bundle = $this->getApplication()->getKernel()->getBundle($input->getArgument('BundleName'));
        $output->writeln(sprintf('BundleName "<info>%s</info>"', $bundle->getName()));

        $bundleName = $bundle->getName();
        $bundleNamespace = $bundle->getNamespace();
        $oberFilePath = $bundle->getPath() . '/Resources/config/ober/er.edm';
        $outputFilePath = $bundle->getPath() . '/Resources/config/doctrine';

        $fs = new Filesystem();
        if(!$fs->exists($oberFilePath)){
            $output->writeln(sprintf('"<info>%s</info>" file does not exist.', $oberFilePath));
            return;
        }

        if(!$fs->exists($outputFilePath)){
            $fs->mkdir($outputFilePath);
            $output->writeln(sprintf('"<info>%s</info>" make directory..', $outputFilePath));
        }

//        echo $outputFilePath;

//        echo $bundle->getNamespace();


//        echo $oberFilePath;


        $oberMng = new OberMng();
        $oberMng->loadFile($oberFilePath);

        $oberMngToYaml = new OberMngToYaml($oberMng, $bundleNamespace."\\Entity");
        $ret = $oberMngToYaml->convertArray();

        foreach($ret as $key => $value)
        {
            $yaml = Yaml::dump($value, 10);
//            file_put_contents('C:\project\water_tank\prototype2\source\watertank2\src\Watertank\PublicBundle\Resources\config\doctrine\\'.$key.'.orm.yml', $yaml);
//            file_put_contents($outputFilePath.'/'.$key.'.orm.yml', $yaml);
//            echo $outputFilePath.'/'.$key.'.orm.yml';
        }

    }
}
