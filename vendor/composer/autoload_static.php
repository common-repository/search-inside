<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit177a89011a8a43e89c2d2d4226d283f5
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\Url\\' => 16,
            'Josantonius\\Json\\' => 17,
            'Josantonius\\Hook\\' => 17,
            'Josantonius\\File\\' => 17,
        ),
        'E' => 
        array (
            'Eliasis\\Framework\\' => 18,
            'Eliasis\\Complement\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/url/src',
        ),
        'Josantonius\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/json/src',
        ),
        'Josantonius\\Hook\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/hook/src',
        ),
        'Josantonius\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/file/src',
        ),
        'Eliasis\\Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/eliasis/src',
        ),
        'Eliasis\\Complement\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/complement/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Eliasis\\Components\\WP_Plugin_Rating\\Controller\\Launcher' => __DIR__ . '/../..' . '/components/wp-plugin-rating/src/controller/class-launcher.php',
        'Eliasis\\Components\\WP_Plugin_Rating\\Controller\\Main' => __DIR__ . '/../..' . '/components/wp-plugin-rating/src/controller/class-main.php',
        'Eliasis\\Plugins\\WP_Plugin_Info\\Controller\\Main' => __DIR__ . '/../..' . '/plugins/wp-plugin-info/src/controller/class-main.php',
        'Eliasis\\Plugins\\WP_Plugin_Info\\Model\\Main' => __DIR__ . '/../..' . '/plugins/wp-plugin-info/src/model/class-main.php',
        'Josantonius\\WP_Menu\\WP_Menu' => __DIR__ . '/..' . '/josantonius/wp_menu/src/class-wp-menu.php',
        'Josantonius\\WP_Register\\WP_Register' => __DIR__ . '/..' . '/josantonius/wp_register/src/class-wp-register.php',
        'SearchInside\\Controller\\Admin\\Page\\Options' => __DIR__ . '/../..' . '/src/controller/admin/page/class-options.php',
        'SearchInside\\Controller\\Launcher' => __DIR__ . '/../..' . '/src/controller/class-launcher.php',
        'SearchInside\\Controller\\Uninstall' => __DIR__ . '/../..' . '/src/controller/class-uninstall.php',
        'SearchInside\\Model\\Admin\\Page\\Options' => __DIR__ . '/../..' . '/src/model/admin/page/class-options.php',
        'SearchInside\\Model\\Launcher' => __DIR__ . '/../..' . '/src/model/class-launcher.php',
        'SearchInside\\Model\\Uninstall' => __DIR__ . '/../..' . '/src/model/class-uninstall.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit177a89011a8a43e89c2d2d4226d283f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit177a89011a8a43e89c2d2d4226d283f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit177a89011a8a43e89c2d2d4226d283f5::$classMap;

        }, null, ClassLoader::class);
    }
}