<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'lexik_paybox.response_handler' shared service.

include_once $this->targetDirs[3].'/vendor/lexik/paybox-bundle/Paybox/System/Base/Response.php';

return $this->services['lexik_paybox.response_handler'] = new \Lexik\Bundle\PayboxBundle\Paybox\System\Base\Response(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['monolog.logger.payment'] ?? $this->load('getMonolog_Logger_PaymentService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $this->getParameter('lexik_paybox.parameters'));
