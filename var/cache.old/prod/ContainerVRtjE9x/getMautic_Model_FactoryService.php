<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.model.factory' shared service.

return $this->services['mautic.model.factory'] = new \Mautic\CoreBundle\Factory\ModelFactory($this);