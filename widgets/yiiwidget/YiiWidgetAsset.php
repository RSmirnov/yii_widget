<?php
namespace app\widgets\yiiwidget;

use yii\web\AssetBundle;

class YiiWidgetAsset extends AssetBundle {
	public $sourcePath = '@bower/w2ui';
	public $css = [
        YII_ENV_DEV ? 'w2ui-1.4.3.css' : 'w2ui-1.4.3.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'w2ui-1.4.3.js' : 'w2ui-1.4.3.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}