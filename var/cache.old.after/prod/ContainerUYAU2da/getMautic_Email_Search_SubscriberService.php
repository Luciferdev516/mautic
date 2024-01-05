<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.search.subscriber' shared service.

return $this->services['mautic.email.search.subscriber'] = new \Mautic\EmailBundle\EventListener\SearchSubscriber(($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()), ($this->services['mautic.email.model.email'] ?? $this->load('getMautic_Email_Model_EmailService.php')), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['mautic.helper.templating'] ?? ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(($this->services['kernel'] ?? $this->get('kernel', 1))))));