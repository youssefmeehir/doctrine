<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTqh8Zwj\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTqh8Zwj/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTqh8Zwj.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTqh8Zwj\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTqh8Zwj\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Tqh8Zwj',
    'container.build_id' => '0231a9eb',
    'container.build_time' => 1585150044,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTqh8Zwj');
