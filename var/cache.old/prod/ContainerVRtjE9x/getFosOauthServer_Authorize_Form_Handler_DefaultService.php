<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.authorize.form.handler.default' shared service.

return $this->privates['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler(($this->privates['fos_oauth_server.authorize.form'] ?? $this->load('getFosOauthServer_Authorize_FormService.php')), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
