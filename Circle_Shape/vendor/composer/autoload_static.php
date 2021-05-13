<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf70e6573432152080173d32812bf69c7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Circles\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Circles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Circles',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf70e6573432152080173d32812bf69c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf70e6573432152080173d32812bf69c7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}