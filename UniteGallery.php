<?php

namespace seiweb\unitegallery;

use yii\base\Widget;
use yii\helpers\Json;
use yii\base\InvalidConfigException;

class UniteGallery extends Widget {

    /**
     * @var type string target of the widget
     */
    public $target;

    /**
     *
     * @var type array of config settings for unitegallery
     */
    public $config = [];

    public $theme = 'default';

    /**
     * @inheritdoc
     */
    public function init() {
        if (is_null($this->target)) {
            throw new InvalidConfigException('"Unitegallery.target has not been defined.');
        }
        // publish the required assets
        $this->registerClientScript();
    }

    /**
     * @inheritdoc
     */
    public function run() {
        $view = $this->getView();

        $this->config['gallery_theme'] = strtolower($this->theme);

        $config = Json::encode($this->config);

        $view->registerJs("jQuery('{$this->target}').unitegallery({$config});");
    }

    /**
     * Registers required script for the plugin to work as DatePicker
     */
    public function registerClientScript() {
        $view = $this->getView();

        MainAsset::register($view);

        if($this->theme=='tilesgrid') $this->theme='tilesGrid';

        $assetname = 'seiweb\\unitegallery\\themes\\'.ucfirst($this->theme).'ThemeAsset';
        if(!class_exists($assetname))
            throw new InvalidConfigException('"Unitegallery.theme has wrong.');

        call_user_func_array([$assetname, 'register'],[$view]);

    }

}
