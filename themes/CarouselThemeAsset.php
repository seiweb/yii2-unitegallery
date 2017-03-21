<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class CarouselThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/carousel/ug-theme-carousel.js'
    ];
    
    public $css = [

    ];
    public $depends = [

    ];

    public function init()
    {
        parent::init();
    }
} 