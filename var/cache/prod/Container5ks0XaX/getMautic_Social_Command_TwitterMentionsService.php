<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.command.twitter_mentions' shared service.

return $this->services['mautic.social.command.twitter_mentions'] = new \MauticPlugin\MauticSocialBundle\Command\MonitorTwitterMentionsCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['mautic.social.helper.twitter_command'] ?? $this->load('getMautic_Social_Helper_TwitterCommandService.php')), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));
