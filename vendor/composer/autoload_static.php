<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66afe0de667476cc03b673b6db909892
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'money\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'money\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66afe0de667476cc03b673b6db909892::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66afe0de667476cc03b673b6db909892::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
