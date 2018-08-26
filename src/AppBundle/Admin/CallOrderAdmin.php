<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CallOrderAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('phone')
            ->add('callRequerstTime')
            ->add('ipAddress')
            ->add('browser')
            ->add('called')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('phone')
            ->add('callRequerstTime')
            ->add('ipAddress')
            ->add('browser')
            ->add('called')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('phone')
            ->add('callRequerstTime')
            ->add('ipAddress')
            ->add('browser')
            ->add('called')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('phone')
            ->add('callRequerstTime')
            ->add('ipAddress')
            ->add('browser')
            ->add('called')
        ;
    }
}
