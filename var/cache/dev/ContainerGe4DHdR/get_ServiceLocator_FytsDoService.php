<?php

namespace ContainerGe4DHdR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FytsDoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fyts_Do' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fyts_Do'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'giftsRepository' => ['privates', 'App\\Repository\\GiftsRepository', 'getGiftsRepositoryService', true],
        ], [
            'entityManager' => '?',
            'giftsRepository' => 'App\\Repository\\GiftsRepository',
        ]);
    }
}
