<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.subscriber' shared service.

$this->services['mautic.lead.subscriber'] = $instance = new \Mautic\LeadBundle\EventListener\LeadSubscriber(($this->services['mautic.helper.ip_lookup'] ?? $this->getMautic_Helper_IpLookupService()), ($this->services['mautic.core.model.auditlog'] ?? $this->getMautic_Core_Model_AuditlogService()), ($this->services['mautic.lead.event.dispatcher'] ?? $this->load('getMautic_Lead_Event_DispatcherService.php')), ($this->services['mautic.helper.template.dnc_reason'] ?? $this->load('getMautic_Helper_Template_DncReasonService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()));

$instance->setModelFactory(($this->services['mautic.model.factory'] ?? ($this->services['mautic.model.factory'] = new \Mautic\CoreBundle\Factory\ModelFactory($this))));

return $instance;