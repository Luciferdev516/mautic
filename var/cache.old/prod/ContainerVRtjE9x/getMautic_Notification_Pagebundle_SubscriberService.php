<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.notification.pagebundle.subscriber' shared service.

return $this->services['mautic.notification.pagebundle.subscriber'] = new \Mautic\NotificationBundle\EventListener\PageSubscriber(($this->services['templating.helper.assets'] ?? $this->load('getTemplating_Helper_AssetsService.php')), ($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()));