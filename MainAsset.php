<?php
namespace seiweb\unitegallery;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'js/unitegallery.js'
    ];
    
    public $css = [
        'css/unite-gallery.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'seiweb\unitegallery\MouseWheelAsset'
    ];

    public function init()
    {
        parent::init();
    }
} 