<?php
namespace seiweb\unitegallery;

use yii\web\AssetBundle;

class MouseWheelAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-mousewheel';

    public $js = [

        'jquery.mousewheel.min.js'
    ];
    
    public $css = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
    }
} 