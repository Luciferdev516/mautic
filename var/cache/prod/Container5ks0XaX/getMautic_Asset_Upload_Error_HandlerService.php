<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.asset.upload.error.handler' shared service.

return $this->services['mautic.asset.upload.error.handler'] = new \Mautic\AssetBundle\ErrorHandler\DropzoneErrorHandler(($this->services['mautic.factory'] ?? ($this->services['mautic.factory'] = new \Mautic\CoreBundle\Factory\MauticFactory($this))));
