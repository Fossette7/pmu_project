<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Depr;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GetCsvCommand extends ContainerAwareCommand
{

    //Name of the command (after "bin/console") for calling command
    protected static $defaultName = 'pmu:import:csv';


    public function configure()
    {
        //nom de la commande+description
        $this
            ->setName('pmu:import:csv')
            ->setDescription('Imports CSV file');
    }

    protected function execute(InputInterface $input, Outputinterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        // la boucle qui lit chaque ligne du fichier csv
        $row = 1;
        //condition fopen est une fonction qui permet de lire un fichier
        if (($handle = fopen("data/de_pr.csv", "r")) !== false) {
            //fgetcsv return un array contenant les lignes du fichier csv
            while (($data = fgetcsv($handle, 0, ";")) !== false) {
                $num = count($data);
                echo "<p> $num champs à la ligne $row: <br /></p>\n";


                //mettre condition
                if ($row > 1) {
                    //une boucle pour retirer les guillemets contenus dans la BDD
                    // et pour retirer les espaces en avant et en arrière
                    foreach($data as $key => $current){
                        $data[$key] = str_replace('\'','', $current);
                        $data[$key] = trim($data[$key]);
                    }

                    //create new entity Depr
                    $data_de_pr = new Depr();

                    $data_de_pr->setRfim($data[0]);
                    $data_de_pr->setNoca($data[1]);
                    $data_de_pr->setNode($data[2]);
                    $data_de_pr->setCdld($data[3]);
                    $data_de_pr->setNopt($data[4]);
                    $data_de_pr->setNota($data[5]);
                    $data_de_pr->setNoch($data[6]);
                    $data_de_pr->setNopc($data[7]);
                    $data_de_pr->setTyca($data[8]);
                    $data_de_pr->setTyde($data[9]);
                    $data_de_pr->setEtpr($data[10]);
                    $data_de_pr->setDtpr($data[11]);
                    $data_de_pr->setHhpr($data[12]);
                    $data_de_pr->setStpu($data[13]);
                    $data_de_pr->setUspu($data[14]);
                    $data_de_pr->setEtaq($data[15]);
                    $data_de_pr->setDtaq($data[16]);
                    $data_de_pr->setHhaq($data[17]);
                    $data_de_pr->setUsaq($data[18]);
                    $data_de_pr->setStar($data[19]);
                    $data_de_pr->setDtprint($data[20]);
                    $data_de_pr->setHhprint($data[21]);
                    $data_de_pr->setUsprint($data[22]);
                    $data_de_pr->setStprint($data[23]);
                    $data_de_pr->setEtct($data[24]);
                    $data_de_pr->setDtct($data[25]);
                    $data_de_pr->setHhct($data[26]);
                    $data_de_pr->setUsct($data[27]);
                    $data_de_pr->setStct($data[28]);
                    $data_de_pr->setDtfval($data[29]);
                    $data_de_pr->setHhval($data[30]);
                    $data_de_pr->setDtpc($data[31]);
                    $data_de_pr->setHhpc($data[32]);
                    $data_de_pr->setPrio($data[33]);
                    $data_de_pr->setEtec($data[34]);
                    $data_de_pr->setEtsa($data[35]);
                    $data_de_pr->setRjpr($data[36]);
                    $data_de_pr->setNolo($data[37]);
                    $data_de_pr->setFiim($data[38]);
                    $data_de_pr->setNenm1($data[39]);
                    $data_de_pr->setPolCarte($data[40]);
                    $data_de_pr->setNenm2($data[41]);
                    $data_de_pr->setNepr1($data[42]);
                    $data_de_pr->setNepr2($data[43]);
                    $data_de_pr->setSx($data[44]);
                    $data_de_pr->setDtns($data[45]);
                    $data_de_pr->setLdns($data[46]);
                    $data_de_pr->setTlde($data[47]);
                    $data_de_pr->setOcrb1($data[48]);
                    $data_de_pr->setOcrb2($data[49]);
                    $data_de_pr->setInph($data[50]);
                    $data_de_pr->setAdr1($data[51]);
                    $data_de_pr->setAdr2($data[52]);
                    $data_de_pr->setDtdval($data[53]);
                    $data_de_pr->setDtfval($data[54]);
                    $data_de_pr->setFlf2($data[55]);
                    $data_de_pr->setLibld($data[56]);
                    $data_de_pr->setFlcl($data[57]);
                    $data_de_pr->setAdr3($data[58]);
                    $data_de_pr->setAdr4($data[59]);
                    $data_de_pr->setFlagTes($data[60]);
                    $data_de_pr->setNumdemande($data[61]);
                    $data_de_pr->setNumordreproduction($data[62]);
                    $data_de_pr->setCodeanomalie($data[63]);
                    $data_de_pr->setCommentaireanomalie($data[64]);
                    $data_de_pr->setUgf($data[65]);
                    $data_de_pr->setUgfAdresse($data[66]);
                    $data_de_pr->setCvuStation($data[67]);
                    $data_de_pr->setTf7FileName($data[68]);
                    $data_de_pr->setDttf7($data[69]);
                    $data_de_pr->setHhtf7($data[70]);
                    $data_de_pr->setRetoucheAuto($data[71]);

                    //Tell Doctrine you want to save the product(no queries yet)
                    $em->persist($data_de_pr);
                    $em->flush();
                }
                $row++;
            }
        }
        fclose($handle);


    }


}