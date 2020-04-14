<?php
/**
 * Created by PhpStorm.
 * User: bricepeyrat
 * Date: 18/03/2020
 * Time: 07:07
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Depr;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{
    /**
     * @Route("/home", name = "home")
     */
    public function displayHomeAction()
    {
        return new Response('Hello World!');
    }

    /**
     * @Route("/home/new", name = "home_new")
     */
    public function createFormAction()
    {

        $mysearchbar = new Depr();

        //On crée notre formBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(Formtype::class, $mysearchbar);

        //on ajoute les champs de l'entité que l'on veut dans son formulaire
        $formBuilder

            ->add('rfim', TextType::class)
            ->add('noca', TextType::class)
            ->add('node', TextType::class)
            ->add('cdld', TextType::class)
            ->add('nopt', TextType::class)
            ->add('nota', TextType::class)
            ->add('noch', TextType::class)
            ->add('nopc', TextType::class)
            ->add('tyca', IntegerType::class)
            ->add('tyde', TextType::class)
            ->add('etpr', IntegerType::class)
            ->add('dtpr', TextType::class)
            ->add('hhpr', TextType::class)
            ->add('stpu', TextType::class)
            ->add('uspu', TextType::class)
            ->add('etaq', IntegerType::class)
            ->add('dtaq', TextType::class)
            ->add('hhaq', TextType::class)
            ->add('usaq', TextType::class)
            ->add('star', TextType::class)
            ->add('dtprint', TextType::class)
            ->add('hhprint', TextType::class)
            ->add('usprint', TextType::class)
            ->add('stprint', TextType::class)
            ->add('etct', IntegerType::class)
            ->add('dtct', TextType::class)
            ->add('hhct', TextType::class)
            ->add('usct', TextType::class)
            ->add('stct', TextType::class)
            ->add('dtval', TextType::class)
            ->add('hhval', TextType::class)
            ->add('dtpc', TextType::class)
            ->add('hhpc', TextType::class)
            ->add('prio', IntegerType::class)
            ->add('etec', IntegerType::class)
            ->add('etsa', IntegerType::class)
            ->add('rjpr', IntegerType::class)
            ->add('nolo', IntegerType::class)
            ->add('fiim', TextType::class)
            ->add('nenm1', TextType::class)
            ->add('pol_carte', TextType::class)
            ->add('nenm2', TextType::class)
            ->add('nepr1', TextType::class)
            ->add('nepr2', TextType::class)
            ->add('sx', TextType::class)
            ->add('dtns', TextType::class)
            ->add('ldns', TextType::class)
            ->add('tlde', TextType::class)
            ->add('ocrb1', TextType::class)
            ->add('ocrb2', TextType::class)
            ->add('inph', TextType::class)
            ->add('adr1', TextType::class)
            ->add('adr2', TextType::class)
            ->add('dtdval', TextType::class)
            ->add('dtfval', TextType::class)
            ->add('flf2', IntegerType::class)
            ->add('libld', TextType::class)
            ->add('flcl', IntegerType::class)
            ->add('adr3', TextType::class)
            ->add('adr4', TextType::class)
            ->add('flag_tes', IntegerType::class)
            ->add('numdemande', TextType::class)
            ->add('numordreproduction',TextType::class)
            ->add('codeanomalie', TextType::class)
            ->add('commentaireanomalie', IntegerType::class)
            ->add('ugf', TextType::class)
            ->add('ugf_adresse', TextType::class)
            ->add('cvu_station', TextType::class)
            ->add('tf7_file_name', TextType::class)
            ->add('dttf7', TextType::class)
            ->add('hhtf7', TextType::class)
            ->add('retouche_auto', TextType::class)
            ;

            $form = $formBuilder->getForm();

        //On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
         return $this->render('default\home.html.twig', array('form'=> $form->createView(),));

    }

    /**
     * @Route("/home/search", name = "home_search")
     */
    //Request est un objet symfony qui récupère les données de $_GET et $_POST
    //Repository sert a selectionner son objet
    public function createSearchFormAction(Request $request)
    {
        $repositoryDepr = $this->getDoctrine()->getRepository(Depr::class);
        //mysearch selection de la liste deroulante
        //key est le champ selectionné
        $maRechercheSouhaitee = $request->query->get('mysearch');
        $filtreRecherche = $request->query->get('usprint');


        //dump($repositoryDeprResult); die();
        //$repositoryDeprResult = $repositoryDepr->findBy([$filtreRecherche => $maRechercheSouhaitee]);



        //dump($maRechercheSouhaite, $filtreRecherche, $repositoryDeprResult); die();

        //dump($home_search);
        //dump($request->query->get("Filtre de recherche"));
        //die();
        return $this->render('default\home.html.twig',['mysearch' => $maRechercheSouhaitee, 'usprint' =>$filtreRecherche]);
    }
}