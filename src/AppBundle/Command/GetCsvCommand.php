<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetCsvCommand extends Command
{

    //Name of the command (after "bin/console")
    protected static $defaultName = 'pmu:import:csv';


    public function configure()
    {
        //...
        $this
            ->setName('csv:import:commande')
            ->setDescription('Imports CSV file');
    }

    protected function execute(InputInterface $input, Outputinterface $output)
    {

        // la boucle
        $row = 1;

        if (($handle = fopen("data/de_pr.csv", "r")) !== false) {
            while (($data = fgetcsv($handle, 0, ";")) !== false) {
                $num = count($data);
                echo "<p> $num champs à la ligne $row: <br /></p>\n";

                dump($data);
                //mettre condition
                if ($row > 1) {
die();
                }

                $row++;
            }
        }
        fclose($handle);

        $data_de_pr = new De_pr;
    }


}