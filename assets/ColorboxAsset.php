<?php

namespace tepaleguiojo\assets;

use yii\web\AssetBundle;

class ColorboxAsset extends AssetBundle
{

    public $sourcePath = '@bower/colorbox';
    public $basePath = '';
    public $baseUrl = '';
    public $js = [];
    public $css = [];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
