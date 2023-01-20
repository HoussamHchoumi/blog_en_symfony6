<?php

namespace App\EventSubscriber;

use App\Model\WelcomeModel;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\RouterInterface;

class ControllerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private RouterInterface $router
    )
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => 'onControllerEvent'
        ];
    }

    public function onControllerEvent(RequestEvent $event): void
    {
       
    }
}