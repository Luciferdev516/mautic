<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.config' shared service.

return $this->services['mautic.social.config'] = new \MauticPlugin\MauticSocialBundle\Form\Type\ConfigType(($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()));
