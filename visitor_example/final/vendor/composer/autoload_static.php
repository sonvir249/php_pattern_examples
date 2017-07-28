<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit013d6f630bc19db5de1f281214972ee2
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VisitorExample\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VisitorExample\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit013d6f630bc19db5de1f281214972ee2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit013d6f630bc19db5de1f281214972ee2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
