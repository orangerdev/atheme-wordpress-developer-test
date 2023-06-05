<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1842cee31802275113ca47d033a41eb2
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirki\\Util\\' => 11,
            'Kirki\\Settings\\' => 15,
            'Kirki\\Module\\' => 13,
            'Kirki\\Field\\' => 12,
            'Kirki\\Data\\' => 11,
            'Kirki\\Compatibility\\' => 20,
            'Kirki\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirki\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/util/src',
        ),
        'Kirki\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/settings/src',
        ),
        'Kirki\\Module\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/module-css/src',
            1 => __DIR__ . '/..' . '/aristath/kirki/packages/module-editor-styles/src',
            2 => __DIR__ . '/..' . '/aristath/kirki/packages/module-field-dependencies/src',
            3 => __DIR__ . '/..' . '/aristath/kirki/packages/module-postmessage/src',
            4 => __DIR__ . '/..' . '/aristath/kirki/packages/module-preset/src',
            5 => __DIR__ . '/..' . '/aristath/kirki/packages/module-section-icons/src',
            6 => __DIR__ . '/..' . '/aristath/kirki/packages/module-selective-refresh/src',
            7 => __DIR__ . '/..' . '/aristath/kirki/packages/module-tooltips/src',
            8 => __DIR__ . '/..' . '/aristath/kirki/packages/module-webfonts/src',
        ),
        'Kirki\\Field\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/field/src/Field',
            1 => __DIR__ . '/..' . '/aristath/kirki/packages/field-background/src',
            2 => __DIR__ . '/..' . '/aristath/kirki/packages/field-dimensions/src',
            3 => __DIR__ . '/..' . '/aristath/kirki/packages/field-fontawesome/src',
            4 => __DIR__ . '/..' . '/aristath/kirki/packages/field-multicolor/src/Field',
            5 => __DIR__ . '/..' . '/aristath/kirki/packages/field-multicolor/src',
            6 => __DIR__ . '/..' . '/aristath/kirki/packages/field-typography/src/Field',
            7 => __DIR__ . '/..' . '/aristath/kirki/packages/field-typography/src',
        ),
        'Kirki\\Data\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/data-option/src',
        ),
        'Kirki\\Compatibility\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/compatibility/src',
        ),
        'Kirki\\' => 
        array (
            0 => __DIR__ . '/..' . '/aristath/kirki/packages/control-base/src',
            1 => __DIR__ . '/..' . '/aristath/kirki/packages/control-checkbox/src',
            2 => __DIR__ . '/..' . '/aristath/kirki/packages/control-code/src',
            3 => __DIR__ . '/..' . '/aristath/kirki/packages/control-color/src',
            4 => __DIR__ . '/..' . '/aristath/kirki/packages/control-color-palette/src',
            5 => __DIR__ . '/..' . '/aristath/kirki/packages/control-cropped-image/src',
            6 => __DIR__ . '/..' . '/aristath/kirki/packages/control-custom/src',
            7 => __DIR__ . '/..' . '/aristath/kirki/packages/control-dashicons/src',
            8 => __DIR__ . '/..' . '/aristath/kirki/packages/control-date/src',
            9 => __DIR__ . '/..' . '/aristath/kirki/packages/control-dimension/src',
            10 => __DIR__ . '/..' . '/aristath/kirki/packages/control-editor/src',
            11 => __DIR__ . '/..' . '/aristath/kirki/packages/control-generic/src',
            12 => __DIR__ . '/..' . '/aristath/kirki/packages/control-image/src',
            13 => __DIR__ . '/..' . '/aristath/kirki/packages/control-multicheck/src',
            14 => __DIR__ . '/..' . '/aristath/kirki/packages/control-palette/src',
            15 => __DIR__ . '/..' . '/aristath/kirki/packages/control-radio/src',
            16 => __DIR__ . '/..' . '/aristath/kirki/packages/control-react-colorful/src',
            17 => __DIR__ . '/..' . '/aristath/kirki/packages/control-react-select/src',
            18 => __DIR__ . '/..' . '/aristath/kirki/packages/control-repeater/src',
            19 => __DIR__ . '/..' . '/aristath/kirki/packages/control-select/src',
            20 => __DIR__ . '/..' . '/aristath/kirki/packages/control-slider/src',
            21 => __DIR__ . '/..' . '/aristath/kirki/packages/control-sortable/src',
            22 => __DIR__ . '/..' . '/aristath/kirki/packages/control-upload/src',
            23 => __DIR__ . '/..' . '/aristath/kirki/packages/field/src',
            24 => __DIR__ . '/..' . '/aristath/kirki/packages/googlefonts/src',
            25 => __DIR__ . '/..' . '/aristath/kirki/packages/l10n/src',
            26 => __DIR__ . '/..' . '/aristath/kirki/packages/module-panels/src',
            27 => __DIR__ . '/..' . '/aristath/kirki/packages/module-sections/src',
            28 => __DIR__ . '/..' . '/aristath/kirki/packages/url-getter/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1842cee31802275113ca47d033a41eb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1842cee31802275113ca47d033a41eb2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1842cee31802275113ca47d033a41eb2::$classMap;

        }, null, ClassLoader::class);
    }
}
