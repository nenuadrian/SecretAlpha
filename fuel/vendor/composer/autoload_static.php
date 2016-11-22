<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bbf871c960638553c515d586d416e22
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'T' => 
        array (
            'Thunder\\Shortcode\\Tests\\' => 24,
            'Thunder\\Shortcode\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'G' => 
        array (
            'Golonka\\BBCode\\' => 15,
        ),
        'F' => 
        array (
            'Fuel\\Upload\\' => 12,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Thunder\\Shortcode\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/tests',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Golonka\\BBCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/golonka/bbcodeparser/src',
        ),
        'Fuel\\Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/fuelphp/upload/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bbf871c960638553c515d586d416e22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bbf871c960638553c515d586d416e22::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5bbf871c960638553c515d586d416e22::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5bbf871c960638553c515d586d416e22::$classMap;

        }, null, ClassLoader::class);
    }
}
