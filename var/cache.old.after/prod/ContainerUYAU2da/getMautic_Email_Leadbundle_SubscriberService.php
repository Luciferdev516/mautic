<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.leadbundle.subscriber' shared service.

return $this->services['mautic.email.leadbundle.subscriber'] = new \Mautic\EmailBundle\EventListener\LeadSubscriber(($this->services['mautic.email.repository.emailReply'] ?? $this->load('getMautic_Email_Repository_EmailReplyService.php')), ($this->services['mautic.email.repository.stat'] ?? $this->load('getMautic_Email_Repository_StatService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()));
