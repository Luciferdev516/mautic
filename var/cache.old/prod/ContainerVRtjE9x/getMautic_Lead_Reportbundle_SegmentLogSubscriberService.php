<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.reportbundle.segment_log_subscriber' shared service.

return $this->services['mautic.lead.reportbundle.segment_log_subscriber'] = new \Mautic\LeadBundle\EventListener\SegmentLogReportSubscriber(($this->services['mautic.lead.reportbundle.fields_builder'] ?? $this->load('getMautic_Lead_Reportbundle_FieldsBuilderService.php')));
