<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.writer' shared service.

return $this->services['mautic.integrations.sync.notification.writer'] = new \Mautic\IntegrationsBundle\Sync\Notification\Writer(($this->services['mautic.core.model.notification'] ?? $this->getMautic_Core_Model_NotificationService()), ($this->services['mautic.core.model.auditlog'] ?? $this->getMautic_Core_Model_AuditlogService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
