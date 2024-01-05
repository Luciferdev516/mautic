<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.campaignbundle.subscriber' shared service.

return $this->services['mautic.form.campaignbundle.subscriber'] = new \Mautic\FormBundle\EventListener\CampaignSubscriber(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()), ($this->services['mautic.form.model.submission'] ?? $this->load('getMautic_Form_Model_SubmissionService.php')), ($this->services['mautic.campaign.executioner.realtime'] ?? $this->load('getMautic_Campaign_Executioner_RealtimeService.php')), ($this->services['mautic.helper.form.field_helper'] ?? $this->getMautic_Helper_Form_FieldHelperService()));