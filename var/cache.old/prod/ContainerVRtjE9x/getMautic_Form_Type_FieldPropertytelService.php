<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.field_propertytel' shared service.

return $this->services['mautic.form.type.field_propertytel'] = new \Mautic\FormBundle\Form\Type\FormFieldTelType(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
