<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.command.deduplicate' shared service.

return $this->services['mautic.lead.command.deduplicate'] = new \Mautic\LeadBundle\Command\DeduplicateCommand(($this->services['mautic.lead.deduper'] ?? $this->load('getMautic_Lead_DeduperService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
