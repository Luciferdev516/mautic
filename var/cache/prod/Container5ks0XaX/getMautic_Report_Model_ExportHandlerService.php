<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.export_handler' shared service.

return $this->services['mautic.report.model.export_handler'] = new \Mautic\ReportBundle\Model\ExportHandler(($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['mautic.helper.file_path_resolver'] ?? $this->getMautic_Helper_FilePathResolverService()));