<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.helper.translator' shared service.

@trigger_error('The "templating.helper.translator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

return $this->services['templating.helper.translator'] = new \Mautic\CoreBundle\Templating\Helper\TranslatorHelper(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
