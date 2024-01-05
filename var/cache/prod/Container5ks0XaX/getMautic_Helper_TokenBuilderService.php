<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.token_builder' shared service.

return $this->services['mautic.helper.token_builder'] = new \Mautic\CoreBundle\Helper\BuilderTokenHelper(($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['mautic.model.factory'] ?? ($this->services['mautic.model.factory'] = new \Mautic\CoreBundle\Factory\ModelFactory($this))), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()));
