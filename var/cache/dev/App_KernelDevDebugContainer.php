<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMuOOuv4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMuOOuv4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMuOOuv4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMuOOuv4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMuOOuv4\App_KernelDevDebugContainer([
    'container.build_hash' => 'MuOOuv4',
    'container.build_id' => '3e323223',
    'container.build_time' => 1683064958,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMuOOuv4');
