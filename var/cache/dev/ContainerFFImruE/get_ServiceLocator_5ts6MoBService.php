<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5ts6MoBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5ts6MoB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5ts6MoB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'entityManager' => '?',
            'normalizer' => '?',
        ]);
    }
}