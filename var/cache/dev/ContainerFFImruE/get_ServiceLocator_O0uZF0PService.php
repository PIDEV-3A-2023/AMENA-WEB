<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O0uZF0PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O0uZF0P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O0uZF0P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'paginator' => '?',
            'registry' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
