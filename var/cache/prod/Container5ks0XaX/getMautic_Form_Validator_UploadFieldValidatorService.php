<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.validator.upload_field_validator' shared service.

return $this->services['mautic.form.validator.upload_field_validator'] = new \Mautic\FormBundle\Validator\UploadFieldValidator(($this->services['mautic.core.validator.file_upload'] ?? $this->load('getMautic_Core_Validator_FileUploadService.php')));
