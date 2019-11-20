<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6afdfd3cae620c391cf2169c8ced364b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Multiples\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Multiples\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6afdfd3cae620c391cf2169c8ced364b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6afdfd3cae620c391cf2169c8ced364b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}