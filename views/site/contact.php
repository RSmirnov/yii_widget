<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Контакты';
?>
<div class="site-contact">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading"><?= Html::encode($this->title) ?></div>
			<div class="panel-body">
			
				<div class="row">
					<div class="col-md-10 col-md-offset-1">

						<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
				
						<div class="alert alert-success">
							Спасибо за обращение. Мы свяжемся с вами в ближайшее время.
						</div>

						<p>
							Note that if you turn on the Yii debugger, you should be able
							to view the mail message on the mail panel of the debugger.
							<?php if (Yii::$app->mailer->useFileTransport): ?>
							Because the application is in development mode, the email is not sent but saved as
							a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
							Please configure the <code>useFileTransport</code> property of the <code>mail</code>
							application component to be false to enable email sending.
							<?php endif; ?>
						</p>

						<?php else: ?>

						<p>
							Если у вас есть вопросы или предложения, пожалуйста заполните следующую форму. Спасибо.
						</p>

						<?php $form = ActiveForm::begin([
							'id' => 'contact-form',
							'options' => ['class' => 'form-horizontal'],
							'fieldConfig' => [
								'template' => "{label}\n<div class=\"col-md-6\">{input}</div>\n<div class=\"col-md-6 col-md-offset-4\">{error}</div>",
								'labelOptions' => ['class' => 'col-md-4 control-label'],
							],
						]); ?>
						<?= $form->field($model, 'name') ?>
						<?= $form->field($model, 'email') ?>
						<?= $form->field($model, 'subject') ?>
						<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
						]) ?>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-5">
								<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
							</div>
						</div>
						<?php ActiveForm::end(); ?>

						<?php endif; ?>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
