<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.validator.custom_field' shared service.

return $this->services['mautic.lead.validator.custom_field'] = new \Mautic\LeadBundle\Validator\CustomFieldValidator(($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
