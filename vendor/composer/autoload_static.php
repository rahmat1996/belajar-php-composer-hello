<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23c3abcff459ad9f586f6deec352c65a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rahmat\\BelajarPhpComposerHello\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rahmat\\BelajarPhpComposerHello\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23c3abcff459ad9f586f6deec352c65a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23c3abcff459ad9f586f6deec352c65a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23c3abcff459ad9f586f6deec352c65a::$classMap;

        }, null, ClassLoader::class);
    }
}
