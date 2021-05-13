<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55b731fc60d9c52660d5ffe4c4b46bb8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shape\\' => 6,
        ),
        'Q' => 
        array (
            'Quadrilateral\\' => 14,
        ),
        'C' => 
        array (
            'Circle\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shape\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Shape',
        ),
        'Quadrilateral\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Quadrilateral',
        ),
        'Circle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Circle',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55b731fc60d9c52660d5ffe4c4b46bb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55b731fc60d9c52660d5ffe4c4b46bb8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}