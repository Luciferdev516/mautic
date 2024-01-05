<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.monitored.unsubscribe.subscriber' shared service.

return $this->services['mautic.email.monitored.unsubscribe.subscriber'] = new \Mautic\EmailBundle\EventListener\ProcessUnsubscribeSubscriber(($this->services['mautic.message.processor.unsubscribe'] ?? $this->load('getMautic_Message_Processor_UnsubscribeService.php')), ($this->services['mautic.message.processor.feedbackloop'] ?? $this->load('getMautic_Message_Processor_FeedbackloopService.php')));