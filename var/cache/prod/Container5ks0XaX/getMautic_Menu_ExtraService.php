<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.menu.extra' shared service.

return $this->services['mautic.menu.extra'] = ($this->services['mautic.menu.builder'] ?? $this->load('getMautic_Menu_BuilderService.php'))->extraMenu();
