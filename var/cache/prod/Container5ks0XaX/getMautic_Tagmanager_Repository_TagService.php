<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.tagmanager.repository.tag' shared service.

return $this->services['mautic.tagmanager.repository.tag'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('MauticPlugin\\MauticTagManagerBundle\\Entity\\Tag');
