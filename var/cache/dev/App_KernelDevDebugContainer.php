<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0h5hiVU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0h5hiVU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0h5hiVU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0h5hiVU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0h5hiVU\App_KernelDevDebugContainer([
    'container.build_hash' => '0h5hiVU',
    'container.build_id' => 'fdd93211',
    'container.build_time' => 1683233308,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0h5hiVU');
