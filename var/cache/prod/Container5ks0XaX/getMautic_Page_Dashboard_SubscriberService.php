<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.page.dashboard.subscriber' shared service.

return $this->services['mautic.page.dashboard.subscriber'] = new \Mautic\PageBundle\EventListener\DashboardSubscriber(($this->services['mautic.page.model.page'] ?? $this->getMautic_Page_Model_PageService()), ($this->services['router'] ?? $this->getRouterService()));