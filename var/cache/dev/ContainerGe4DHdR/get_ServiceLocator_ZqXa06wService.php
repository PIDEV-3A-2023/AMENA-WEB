<?php

namespace ContainerGe4DHdR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZqXa06wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZqXa06w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZqXa06w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['privates', '.errored.75.4JAl', NULL, 'Cannot determine controller argument for "App\\Controller\\ReservationController::getVehicules()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
            'repo' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'serializer' => ['privates', '.errored._XxpMSh', NULL, 'Cannot determine controller argument for "App\\Controller\\ReservationController::getVehicules()": the $serializer argument is type-hinted with the non-existent class or interface: "App\\Controller\\SerializerInterface". Did you forget to add a use statement?'],
        ], [
            'entityManager' => '?',
            'repo' => 'App\\Repository\\ReservationRepository',
            'serializer' => '?',
        ]);
    }
}
