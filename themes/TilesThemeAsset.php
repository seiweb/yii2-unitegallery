<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class TilesThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/tiles/ug-theme-tiles.js'
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