<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class TilesGridThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/tilesgrid/ug-theme-tilesgrid.js'
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