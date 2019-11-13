<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit424f5eef9bb8aef39cdb82b5a67cdb6d
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ibuild\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ibuild\\' => 
        array (
            0 => __DIR__ . '/..' . '/ibuild/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit424f5eef9bb8aef39cdb82b5a67cdb6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit424f5eef9bb8aef39cdb82b5a67cdb6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
