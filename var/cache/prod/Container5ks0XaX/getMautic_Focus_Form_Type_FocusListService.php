<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.focus.form.type.focus_list' shared service.

return $this->services['mautic.focus.form.type.focus_list'] = new \MauticPlugin\MauticFocusBundle\Form\Type\FocusListType(($this->services['mautic.focus.model.focus'] ?? $this->getMautic_Focus_Model_FocusService()));
