<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.messagewhiz.transport' shared service.

return $this->services['mautic.sms.messagewhiz.transport'] = new \MauticPlugin\SurgeBundle\Integration\Messagewhiz\MessagewhizTransport(($this->services['mautic.sms.messagewhiz.configuration'] ?? $this->load('getMautic_Sms_Messagewhiz_ConfigurationService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
