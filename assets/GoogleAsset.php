<?php
/**
 * Created by PhpStorm.
 * User: RSmirnov
 * Date: 16.04.2015
 * Time: 2:00
 */

namespace app\assets;

use yii\web\AssetBundle;

class GoogleAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css'
    ];

    public $js = [
        'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}