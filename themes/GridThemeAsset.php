<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class GridThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/grid/ug-theme-grid.js'
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