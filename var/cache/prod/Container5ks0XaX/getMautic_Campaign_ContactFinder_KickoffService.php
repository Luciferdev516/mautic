<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.contact_finder.kickoff' shared service.

return $this->services['mautic.campaign.contact_finder.kickoff'] = new \Mautic\CampaignBundle\Executioner\ContactFinder\KickoffContactFinder(($this->services['mautic.lead.repository.lead'] ?? $this->getMautic_Lead_Repository_LeadService()), ($this->services['mautic.campaign.repository.campaign'] ?? $this->load('getMautic_Campaign_Repository_CampaignService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
