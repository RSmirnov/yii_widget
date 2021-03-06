<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Макет Виджеты',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Домой', 'url' => ['/']],
					!Yii::$app->user->isGuest ?
					['label' => 'Виджеты',
						'items' => [
							['label' => 'Типы выборок', 'url' => ['/']],
							['label' => 'Выборки', 'url' => ['/']],
							['label' => 'Клиенты', 'url' => ['/']],
						],
					]: '',
                    ['label' => 'О продукте', 'url' => ['/site/about']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Вход', 'url' => ['/auth/login']] :
                        ['label' => 'Выход (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/auth/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-center">&copy; <a href="http://www.avkcom.ru" target="_blank">ЗАО &laquo;АВК-Коммьюникейшнз&raquo;</a>, <?= date('Y') ?></p>
            <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
