<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2wkmuoe\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2wkmuoe/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2wkmuoe.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2wkmuoe\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2wkmuoe\appProdProjectContainer([
    'container.build_hash' => '2wkmuoe',
    'container.build_id' => '7f41e2c1',
    'container.build_time' => 1597161502,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2wkmuoe');