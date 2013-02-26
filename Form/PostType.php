<?php

namespace AltCloud\Instance3BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('teaser')
            ->add('body')
            ->add('date')
			->add('category', 'entity', array(
    								'class' => 'ACInst3BlogBundle:Category',
    							    'required' => true,
    								'property' => 'title'	
									)
				 )
			->add('media', 'entity', array(
    								'class' => 'ACInst3MediaBundle:Media',
    							    'required' => false,
    								'property' => 'title'	
									)
				 )
			->add('gallery', 'entity', array(
    								'class' => 'ACInst3MediaBundle:Gallery',
    							    'required' => false,
    								'property' => 'title'	
									)
				 );
    }

    public function getName()
    {
        return 'altcloud_instance3blogbundle_posttype';
    }
}
