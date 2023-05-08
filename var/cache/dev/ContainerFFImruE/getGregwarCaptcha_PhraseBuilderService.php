<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_PhraseBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gregwar_captcha.phrase_builder' shared service.
     *
     * @return \Gregwar\Captcha\PhraseBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'PhraseBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'PhraseBuilder.php';

        return $container->services['gregwar_captcha.phrase_builder'] = new \Gregwar\Captcha\PhraseBuilder();
    }
}
