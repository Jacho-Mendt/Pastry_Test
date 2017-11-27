<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Pastry;

class PastryDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $ingredients = $this->getDoctrine()->getRepository(Ingredients::class)->createQueryBuilder('p.name')->getQuery()->getResult();
        
        $builder
            ->add('name')
            ->add('description')
            ->add('ingredients', CheckboxType::class,array('choices'=>$ingredients))
            ->add('Send Data', SubmitType::class);
    }
}
?>