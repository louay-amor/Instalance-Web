<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRE3YH54\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRE3YH54/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRE3YH54.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRE3YH54\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRE3YH54\App_KernelDevDebugContainer([
    'container.build_hash' => 'RE3YH54',
    'container.build_id' => 'ec6dfe9e',
    'container.build_time' => 1683148593,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRE3YH54');
