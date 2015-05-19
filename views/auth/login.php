<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Единый вход в систему';
?>
<div class="auth-login">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"><?= Html::encode($this->title) ?></div>
					<div class="panel-body">

						<p class="text-center">Пожалуйста, заполните следующие поля для входа:</p>

						<?php $form = ActiveForm::begin([
							'id' => 'login-form',
							'options' => ['class' => 'form-horizontal'],
							'fieldConfig' => [
								'template' => "{label}\n<div class=\"col-md-6\">{input}</div>\n<div class=\"col-md-6 col-md-offset-4\">{error}</div>",
								'labelOptions' => ['class' => 'col-md-4 control-label'],
							],
						]); ?>
						
						<?= $form->field($model, 'username') ?>
						
						<?= $form->field($model, 'password')->passwordInput() ?>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-5">
								<?= Html::submitButton('Войти в систему', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
							</div>
						</div>

						<?php ActiveForm::end(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>