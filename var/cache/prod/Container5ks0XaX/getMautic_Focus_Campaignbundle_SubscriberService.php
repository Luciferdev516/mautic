<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.focus.campaignbundle.subscriber' shared service.

return $this->services['mautic.focus.campaignbundle.subscriber'] = new \MauticPlugin\MauticFocusBundle\EventListener\CampaignSubscriber(($this->services['mautic.page.helper.tracking'] ?? $this->load('getMautic_Page_Helper_TrackingService.php')), ($this->services['router'] ?? $this->getRouterService()));