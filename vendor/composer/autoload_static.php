<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c28c92462a8ae4707664e80bd9a4d68
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c28c92462a8ae4707664e80bd9a4d68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c28c92462a8ae4707664e80bd9a4d68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
