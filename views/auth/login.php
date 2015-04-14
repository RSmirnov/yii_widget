<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Единый вход в систему';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><?= Html::encode($this->title) ?></div>
				<div class="panel-body">

					<p>Пожалуйста, заполните следующие поля для входа:</p>

					<?php $form = ActiveForm::begin([
						'id' => 'login-form',
						'options' => ['class' => 'form-horizontal'],
						'fieldConfig' => [
							'template' => "{label}\n<div class=\"col-md-6\">{input}</div>\n<div class=\"col-md-8\">{error}</div>",
							'labelOptions' => ['class' => 'col-md-4 control-label'],
						],
					]); ?>
					
					<?= $form->field($model, 'username') ?>
					
					<?= $form->field($model, 'password')->passwordInput() ?>
					
					<?= $form->field($model, 'rememberMe', [
						'template' => "<div class=\"col-md-6 col-md-offset-4\">{input}{label}</div>\n<div class=\"col-md-8\">{error}</div>",
						'labelOptions' => ['class' => 'label', 'style' => 'color: #000; font-weight: normal;'],
					])->checkbox([],false) ?>
					
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
						</div>
					</div>

					<?php ActiveForm::end(); ?>

					<div class="col-lg-offset-1" style="color:#999;">
						You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
						To modify the username/password, please check out the code <code>app\models\User::$users</code>.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>