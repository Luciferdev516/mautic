<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.templating.helper' shared service.

return $this->privates['knp_menu.templating.helper'] = new \Knp\Bundle\MenuBundle\Templating\Helper\MenuHelper(($this->privates['knp_menu.helper'] ?? $this->load('getKnpMenu_HelperService.php')), ($this->services['knp_menu.matcher'] ?? $this->load('getKnpMenu_MatcherService.php')), ($this->privates['knp_menu.manipulator'] ?? ($this->privates['knp_menu.manipulator'] = new \Knp\Menu\Util\MenuManipulator())));
