<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2G5mwez\Shopware_Production_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2G5mwez/Shopware_Production_KernelProdContainer.php') {
    touch(__DIR__.'/Container2G5mwez.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelProdContainer::class, false)) {
    \class_alias(\Container2G5mwez\Shopware_Production_KernelProdContainer::class, Shopware_Production_KernelProdContainer::class, false);
}

return new \Container2G5mwez\Shopware_Production_KernelProdContainer([
    'container.build_hash' => '2G5mwez',
    'container.build_id' => '4eea8247',
    'container.build_time' => 1639861210,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2G5mwez');