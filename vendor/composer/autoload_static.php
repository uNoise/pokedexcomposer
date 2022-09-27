<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde6cad806f23194cd5086b81f32b8974
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'composer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/pokedex',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde6cad806f23194cd5086b81f32b8974::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde6cad806f23194cd5086b81f32b8974::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde6cad806f23194cd5086b81f32b8974::$classMap;

        }, null, ClassLoader::class);
    }
}
