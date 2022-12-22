<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab603979321477614decaffa3901c83c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab603979321477614decaffa3901c83c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab603979321477614decaffa3901c83c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab603979321477614decaffa3901c83c::$classMap;

        }, null, ClassLoader::class);
    }
}
