<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.security.saml.credential_store' shared service.

return $this->services['mautic.security.saml.credential_store'] = new \Mautic\UserBundle\Security\SAML\Store\CredentialsStore(($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), $this->getEnv('MAUTIC_SAML_ENTITY_ID'));