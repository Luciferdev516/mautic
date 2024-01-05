<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.legacy_event_dispatcher' shared service.

return $this->services['mautic.campaign.legacy_event_dispatcher'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\LegacyEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.campaign.scheduler'] ?? $this->load('getMautic_Campaign_SchedulerService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()), ($this->services['mautic.campaign.helper.notification'] ?? $this->load('getMautic_Campaign_Helper_NotificationService.php')), ($this->services['mautic.factory'] ?? ($this->services['mautic.factory'] = new \Mautic\CoreBundle\Factory\MauticFactory($this))), ($this->services['mautic.tracker.contact'] ?? $this->getMautic_Tracker_ContactService()));
