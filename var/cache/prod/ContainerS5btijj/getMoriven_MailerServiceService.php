<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'moriven.mailer_service' shared service.

include_once $this->targetDirs[3].'\\src\\MorivenBundle\\Service\\MailerService.php';

return $this->services['moriven.mailer_service'] = new \MorivenBundle\Service\MailerService(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'});
