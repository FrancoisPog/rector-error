<?php

use Symfony\Component\Form\FormBuilderInterface;

trait DtoFormTrait
{
    /** Set te form as its own data mapper */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);
        $builder
            ->setDataMapper($this);
    }
}
