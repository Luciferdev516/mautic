<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fm_elfinder.loader' shared service.

return $this->services['fm_elfinder.loader'] = new \FM\ElfinderBundle\Loader\ElFinderLoader(new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader($this->getParameter('fm_elfinder'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this));
