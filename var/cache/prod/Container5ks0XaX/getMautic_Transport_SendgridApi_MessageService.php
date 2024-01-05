<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.sendgrid_api.message' shared service.

return $this->services['mautic.transport.sendgrid_api.message'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\SendGridApiMessage(($this->services['mautic.transport.sendgrid_api.mail.base'] ?? $this->load('getMautic_Transport_SendgridApi_Mail_BaseService.php')), ($this->services['mautic.transport.sendgrid_api.mail.personalization'] ?? ($this->services['mautic.transport.sendgrid_api.mail.personalization'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\Mail\SendGridMailPersonalization())), ($this->services['mautic.transport.sendgrid_api.mail.metadata'] ?? ($this->services['mautic.transport.sendgrid_api.mail.metadata'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\Mail\SendGridMailMetadata())), ($this->services['mautic.transport.sendgrid_api.mail.attachment'] ?? ($this->services['mautic.transport.sendgrid_api.mail.attachment'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\Mail\SendGridMailAttachment())));