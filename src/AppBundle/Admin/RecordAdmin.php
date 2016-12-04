<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


class RecordAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('hostname', 'text')
            ->add('ipAddress')
            ->add('isEnabled');

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('hostname')
            ->add('ipAddress')
            ->add('isEnabled')
            ->add('lastUsed')
            ->add('useCount');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('hostname')
            ->add('ipAddress')
            ->add('isEnabled', null, [
                'editable' => true
            ])
            ->add('lastUsed', null, [
                'template' => 'AppBundle:CRUD:timestamp_as_datetime_field.html.twig'
            ])
            ->add('useCount')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => []
                )
            ));
    }
}
