<?php

namespace ContainerGe4DHdR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Endroid\QrCode\Builder\Builder' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\Builder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'Builder.php';

        return $container->privates['Endroid\\QrCode\\Builder\\Builder'] = new \Endroid\QrCode\Builder\Builder();
    }
}
