<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.scheduler_date_builder' shared service.

return $this->services['mautic.report.model.scheduler_date_builder'] = new \Mautic\ReportBundle\Scheduler\Date\DateBuilder(($this->services['mautic.report.model.scheduler_builder'] ?? $this->load('getMautic_Report_Model_SchedulerBuilderService.php')));
