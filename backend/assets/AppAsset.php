<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "css/bootstrap.css",
    ];
    public $js = [
        //'assets/js/jquery.min.js',
        'assets/js/jquery-ui.js',
        'assets/js/jquery.dataTables.min.js',
        'assets/js/jquery-ui.multidatespicker.js',
        'assets/js/chosen.jquery.js',
        'assets/js/chosen.jquery.js',
        'assets/js/my-custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
