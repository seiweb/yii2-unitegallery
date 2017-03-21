<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class DefaultThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/default/ug-theme-default.js'
    ];
    
    public $css = [
        'themes/default/ug-theme-default.css'
    ];
    public $depends = [

    ];

    public function init()
    {
        parent::init();
    }
} 