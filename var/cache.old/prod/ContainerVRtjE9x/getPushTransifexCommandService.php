<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Mautic\CoreBundle\Command\PushTransifexCommand' shared autowired service.

return $this->services['Mautic\\CoreBundle\\Command\\PushTransifexCommand'] = new \Mautic\CoreBundle\Command\PushTransifexCommand(($this->services['transifex.factory'] ?? $this->load('getTransifex_FactoryService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.language'] ?? $this->load('getMautic_Helper_LanguageService.php')));