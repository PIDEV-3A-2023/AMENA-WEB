<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVQLVW81\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVQLVW81/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVQLVW81.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVQLVW81\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVQLVW81\App_KernelDevDebugContainer([
    'container.build_hash' => 'VQLVW81',
    'container.build_id' => '5d3c8583',
    'container.build_time' => 1683137423,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVQLVW81');
