<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite101d95063db60d17d7ca444145818dd
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite101d95063db60d17d7ca444145818dd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}