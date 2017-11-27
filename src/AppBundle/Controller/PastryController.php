<?php
    namespace AppBundle\Controller;

    use Doctrine\ORM\EntityManagerInterface;
    use AppBundle\Entity\Pastry;
    use AppBundle\Form\PastryDataType;
    use Symfony\Component\HttpFoundation\Request;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Session\Session;
    
class PastryController extends Controller
{
    /**
     * @Route("/pastries/{pastry}",name = "showPastries")
     */
    public function showPastry($pastry = "")
    {
        
        $repository = $this->getDoctrine()->getRepository(Pastry::class);
        $pastriesToShow;
        if($pastry == "")
        {
            $pastriesToShow = $repository->findAll();
        }
        else
        {
            $pastriesToShow = $repository->findBy(array("id"=>$pastry));
        }
        
        return $this->render('Navigation/pastries.html.twig', array('page_title'=>'Pasticcini','pastriesToShow'=>$pastriesToShow));
    }
    
    /**
     * @Route("/pastries/{pastry}/edit",name = "editPastries")
     */
    public function editPastry(Request $request)
    {
        // 1) build the form
        $pastryEdit = new Pastry();
        $form = $this->createForm(PastryDataType::class, $pastryEdit);
        
        return $this->render('Edit/editPastry.html.twig',
            array('form' => $form->createView()));
    }
}

?>