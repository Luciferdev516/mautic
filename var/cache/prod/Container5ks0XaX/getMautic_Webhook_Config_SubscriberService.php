<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.webhook.config.subscriber' shared service.

return $this->services['mautic.webhook.config.subscriber'] = new \Mautic\WebhookBundle\EventListener\ConfigSubscriber();
