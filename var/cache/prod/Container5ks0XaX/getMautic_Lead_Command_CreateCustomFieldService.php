<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.command.create_custom_field' shared service.

return $this->services['mautic.lead.command.create_custom_field'] = new \Mautic\LeadBundle\Field\Command\CreateCustomFieldCommand(($this->services['mautic.lead.field.settings.background_service'] ?? $this->load('getMautic_Lead_Field_Settings_BackgroundServiceService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.lead.repository.field'] ?? $this->getMautic_Lead_Repository_FieldService()));
