<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAuRz68G\Shopware_Production_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAuRz68G/Shopware_Production_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerAuRz68G.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelProdContainer::class, false)) {
    \class_alias(\ContainerAuRz68G\Shopware_Production_KernelProdContainer::class, Shopware_Production_KernelProdContainer::class, false);
}

return new \ContainerAuRz68G\Shopware_Production_KernelProdContainer([
    'container.build_hash' => 'AuRz68G',
    'container.build_id' => 'fe6733a8',
    'container.build_time' => 1639861898,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAuRz68G');
