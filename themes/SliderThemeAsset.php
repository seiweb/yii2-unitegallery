<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class SliderThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/slider/ug-theme-slider.js'
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