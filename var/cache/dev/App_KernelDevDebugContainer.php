<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container22xgZwH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container22xgZwH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container22xgZwH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container22xgZwH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container22xgZwH\App_KernelDevDebugContainer([
    'container.build_hash' => '22xgZwH',
    'container.build_id' => '05a04905',
    'container.build_time' => 1683125462,
], __DIR__.\DIRECTORY_SEPARATOR.'Container22xgZwH');
