<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.integration.list' shared service.

return $this->services['mautic.form.type.integration.list'] = new \Mautic\PluginBundle\Form\Type\IntegrationsListType(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()));
