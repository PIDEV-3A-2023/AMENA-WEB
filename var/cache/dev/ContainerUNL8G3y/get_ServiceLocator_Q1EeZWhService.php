<?php

namespace ContainerUNL8G3y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q1EeZWhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q1EeZWh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q1EeZWh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'validation' => ['privates', '.errored..service_locator.Q1EeZWh.App\\Entity\\Validation', NULL, 'Cannot autowire service ".service_locator.Q1EeZWh": it references class "App\\Entity\\Validation" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'validation' => 'App\\Entity\\Validation',
        ]);
    }
}
