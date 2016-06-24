<?php
namespace mirage\smartmenus;
use yii\web\AssetBundle;
/**
 * Asset bundle for the Materialize css files.
 *
 * @author Sirage Studio TH <miragestudioth@gmail.com>
 * @since 2.0
 */
class SmartMenusAsset extends AssetBundle
{
    public $sourcePath = '@vendor/drmonty/smartmenus';
    public $css = [
        'css/sm-core-css.css',
        //'css/sm-blue.css',
    ];
    public $js = [
        'js/jquery.smartmenus.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
