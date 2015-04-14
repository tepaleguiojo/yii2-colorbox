<?php

namespace tepaleguiojo\assets;

use yii\web\AssetBundle;

class ColorboxAsset extends AssetBundle
{

    public $sourcePath = '@bower/colorbox';
    public $basePath = '';
    public $baseUrl = '';
    public $js = [
        'jquery.colorbox-min.js'
    ];
    public $css = [
        'example1/colorbox.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
