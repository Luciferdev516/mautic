<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.membership.event_dispatcher' shared service.

return $this->services['mautic.campaign.membership.event_dispatcher'] = new \Mautic\CampaignBundle\Membership\EventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));