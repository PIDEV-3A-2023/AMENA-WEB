<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< Updated upstream
if (\class_exists(\Container4fsL55S\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4fsL55S/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4fsL55S.legacy');
=======
if (\class_exists(\ContainerFzcMhCM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFzcMhCM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFzcMhCM.legacy');
>>>>>>> Stashed changes

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< Updated upstream
    \class_alias(\Container4fsL55S\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4fsL55S\App_KernelDevDebugContainer([
    'container.build_hash' => '4fsL55S',
    'container.build_id' => '8301105a',
    'container.build_time' => 1680540023,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4fsL55S');
=======
    \class_alias(\ContainerFzcMhCM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFzcMhCM\App_KernelDevDebugContainer([
    'container.build_hash' => 'FzcMhCM',
    'container.build_id' => '98e6391c',
    'container.build_time' => 1680543876,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFzcMhCM');
>>>>>>> Stashed changes
