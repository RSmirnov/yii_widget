<?php
use yii\helpers\Html;
use app\widgets\yiiwidget\YiiWidgetAutoload;
/* @var $this yii\web\View */
$this->title = 'Макет Виджеты';
?>
<div class="site-index">
    <div class="body-content">
		<?php echo YiiWidgetAutoload::widget(); ?>
    </div>
</div>
