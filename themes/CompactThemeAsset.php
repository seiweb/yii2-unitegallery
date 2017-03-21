<?php
namespace seiweb\unitegallery\themes;

use yii\web\AssetBundle;

class CompactThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/unitegallery/dist';

    public $js = [
        'themes/compact/ug-theme-compact.js'
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