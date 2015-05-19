<?php
/**
 * Created by PhpStorm.
 * User: RSmirnov
 * Date: 16.04.2015
 * Time: 2:03
 */

namespace app\widgets\yiiwidget;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use Yii;

class YiiWidgetAutoload extends Widget {

    public function init() {
        parent::init();
        $view = Yii::$app->getView();
        $this->registerAssets();
        $view->registerJs($this->getJs());
    }
    public function run() {
        $content = Html::tag('div', '', ['id' => 'w2ui-layout', 'style' => 'width: 100%; height: 400px;']);
        return $content;
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        YiiWidgetAsset::register($view);
    }

    private function getJs() {
		$js = [];
        $js [] = "$(function () {";
		$js [] = "  var grid = $().w2grid({";
        $js [] = "      name: 'grid',";
        $js [] = "      header: 'List of Names',";
        $js [] = "      show : {";
        $js [] = "          header : true";
        $js [] = "      },";
        $js [] = "      columns: [";
        $js [] = "          { field: 'fname', caption: 'First Name', size: '30%' },";
        $js [] = "          { field: 'lname', caption: 'Last Name', size: '30%' },";
        $js [] = "          { field: 'email', caption: 'Email', size: '40%' },";
        $js [] = "          { field: 'sdate', caption: 'Start Date', size: '120px' }";
        $js [] = "      ],";
        $js [] = "      records: [";
        $js [] = "          { recid: 1, fname: 'Peter', lname: 'Jeremia', email: 'peter@mail.com', sdate: '2/1/2010' },";
        $js [] = "          { recid: 2, fname: 'Bruce', lname: 'Wilkerson', email: 'bruce@mail.com', sdate: '6/1/2010' },";
        $js [] = "          { recid: 3, fname: 'John', lname: 'McAlister', email: 'john@mail.com', sdate: '1/16/2010' },";
        $js [] = "          { recid: 4, fname: 'Ravi', lname: 'Zacharies', email: 'ravi@mail.com', sdate: '3/13/2007' },";
        $js [] = "          { recid: 5, fname: 'William', lname: 'Dembski', email: 'will@mail.com', sdate: '9/30/2011' },";
        $js [] = "          { recid: 6, fname: 'David', lname: 'Peterson', email: 'david@mail.com', sdate: '4/5/2010' }";
        $js [] = "      ]";
        $js [] = "  })";
        $js [] = "	var pstyle = 'background-color: #F5F6F7; border: 1px solid #dfdfdf; padding: 5px;';";
        $js [] = "	$('#w2ui-layout').w2layout({";
        $js [] = "		name: 'layout',";
        $js [] = "		panels: [";
        $js [] = "			{ type: 'top',  size: 50, resizable: true, style: pstyle, content: 'top' },";
        $js [] = "			{ type: 'left', size: 200, resizable: true, style: pstyle, content: 'left' },";
        $js [] = "			{ type: 'main', style: pstyle, content: grid },";
        $js [] = "			{ type: 'preview', size: '50%', resizable: true, style: pstyle, content: 'preview' },";
        $js [] = "			{ type: 'right', size: 200, resizable: true, style: pstyle, content: 'right' },";
        $js [] = "			{ type: 'bottom', size: 50, resizable: true, style: pstyle, content: 'bottom' }";
        $js [] = "		]";
        $js [] = "	});";
        $js [] = "});";
		
        return implode("\n", $js);
    }

}