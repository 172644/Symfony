<?php

namespace OC\PlatformBundle\Form;

use Doctrine\ORM\EntityManager;
use OC\PlatformBundle\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OC\PlatformBundle\Repository\CategoryRepository;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use OC\PlatformBundle\Form\CkeditorType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AdvertType extends AbstractType
{
    private $newCat;
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*
        $builder
            ->add('date')
            ->add('title')
            ->add('author')
            ->add('content')
            ->add('published')
            ->add('updatedAt')
            ->add('slug')
            ->add('nbApplications')
            ->add('image')
            ->add('categories');//*/
        $pattern = 'D%';

        $builder
            ->add('date',      DateTimeType::class)
            ->add('title',     TextType::class)
            ->add('content',   CkeditorType::class)
            ->add('published', CheckboxType::class, array('required' => false))
            ->add('image',     ImageType::class)
            //*
            ->add('categories_', CollectionType::class, array(
                'entry_type'   => CategoryType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))//*/
            //*
            ->add('categories', EntityType::class, array(
                'required'      => false,
                'class'         => 'OCPlatformBundle:Category',
                'choice_label'  => 'name',
                'multiple'      => true,
                /*
                'query_builder' => function(CategoryRepository $repository) use($pattern) {
                    return $repository->getLikeQueryBuilder($pattern);
                }*/
            ))//*/
            ->add('save',      SubmitType::class);


        $builder->addEventListener(FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
            function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
                // On récupère notre objet Advert sous-jacent
                $advert = $event->getData();

                // Cette condition est importante, on en reparle plus loin
                if (null === $advert) {
                    return; // On sort de la fonction sans rien faire lorsque $advert vaut null
                }

                // Si l'annonce n'est pas publiée, ou si elle n'existe pas encore en base (id est null)
                if (!$advert->getPublished() || null === $advert->getId()) {
                    // Alors on ajoute le champ published
                    $event->getForm()->add('published', CheckboxType::class, array('required' => false));
                } else {
                    // Sinon, on le supprime
                    $event->getForm()->remove('published');
                }
                //var_dump($advert);
                //exit;
            }
        );

        $builder->addEventListener(FormEvents::PRE_SUBMIT,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
            function(FormEvent $event) use ($options) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
                $categories = $options['entityManager'];

                $categorieName = array();
                foreach ($categories as $cat)
                {
                    $categorieName[$cat->getName()] = $cat->getId();
                }
                // On récupère notre objet Advert sous-jacent
                $advert = $event->getData();

                // Cette condition est importante, on en reparle plus loin
                if (null === $advert) {
                    return; // On sort de la fonction sans rien faire lorsque $advert vaut null
                }

                $newCat = array();

                if(!empty($advert['categories_']) && $advert['categories_'] != null) {
                    foreach ($advert['categories_'] as $_cat) {
                        $_name = $_cat['name'];

                        if(empty($categorieName[$_name]) || $categorieName[$_name] == null) {
                            $_category = new Category();
                            $_category->setName($_name);
                            if(!in_array($_category, $newCat))
                                $newCat[] = $_category;
                        }
                        else
                        {
                            if(!in_array($categorieName[$_name], $advert['categories']))
                                $advert['categories'][] = $categorieName[$_name];
                        }
                    }
                    $this->newCat = $newCat;
                    $event->setData($advert);
                }
            }
        );
        //*
        $builder->addEventListener(FormEvents::SUBMIT,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
            function(FormEvent $event) use ($options) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
                $categories = $options['entityManager'];

                $categorieName = array();
                foreach ($categories as $cat)
                {
                    $categorieName[$cat->getName()] = $cat->getId();
                }
                // On récupère notre objet Advert sous-jacent
                $advert = $event->getData();

                // Cette condition est importante, on en reparle plus loin
                if (null === $advert) {
                    return; // On sort de la fonction sans rien faire lorsque $advert vaut null
                }

                if(!empty($this->newCat) && $this->newCat != null) {
                    foreach ($this->newCat as $_cat) {
                        if (empty($categorieName[$_cat->getName()]) || $categorieName[$_cat->getName()] == null)
                            $advert->addCategory($_cat);
                    }
                }

                $event->setData($advert);
                dump($advert);
            }
        );

//        $builder->get('categories_')->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) {
//            $data = $event->getData();
//            $form = $event->getForm();
//
//            dump($data);
//
//            $this->newcat = $data;
//
//            // ou
//            // inutile car on fait $builder->get('newcategories') au départ
//            // $newcat = $form->getData('newcategories');
//            // $this->newcat = $data['newcategories'];
//        });


//        $builder->addEventListener(FormEvents::SUBMIT, function(FormEvent $event)  {
//            $data = $event->getData();
//            dump($data);
//            if ( null != $this->newcat) {
//                foreach ($this->newcat as $newcat) {
//                    $cate = new Category();
//                    $cate->setName($newcat['name']);
//                    $data->addCategory($cate);
//                }
//            }
//        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\PlatformBundle\Entity\Advert',
            'entityManager' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_platformbundle_advert';
    }


}
