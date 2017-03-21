yii2-unitegallery
=============

http://unitegallery.net/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist sewieb/yii2-unitegallery "~1.0"
```

or add

```
"sewieb/yii2-unitegallery": "~1.0"
```

to the require section of your `composer.json` file.


Usage
-----

```php
<?php

echo \seiweb\unitegallery\UniteGallery::widget([
    'target' => '#gallery',
    'theme' => 'compact', //tiles,tilesgrid,carousel,default,compact,grid,slider
    'config' => [
        //jQuery().unitegallery({options});
    ]
]);

?>
```
