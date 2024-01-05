<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.mandrill' shared service.

$this->services['mautic.transport.mandrill'] = $instance = new \Mautic\EmailBundle\Swiftmailer\Transport\MandrillTransport(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.email.model.transport_callback'] ?? $this->load('getMautic_Email_Model_TransportCallbackService.php')));

$instance->setUsername($this->getEnv('nullable:resolve:MAUTIC_MAILER_USER'));
$instance->setPassword($this->getEnv('nullable:resolve:MAUTIC_MAILER_API_KEY'));

return $instance;