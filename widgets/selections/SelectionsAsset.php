<?php
/**
 * Created by PhpStorm.
 * User: RSmirnov
 * Date: 16.04.2015
 * Time: 2:00
 */

namespace app\widgets\selections;

use yii\web\AssetBundle;

class SelectionsAsset extends AssetBundle {

    public $sourcePath  = '@app/widgets/selections/assets';

    public $css = [
        'css/selections.css'
    ];

    public $js = [
        'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}