<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.plugin.clearbit.button.subscriber' shared service.

return $this->services['mautic.plugin.clearbit.button.subscriber'] = new \MauticPlugin\MauticClearbitBundle\EventListener\ButtonSubscriber(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()));