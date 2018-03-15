<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        'brandLabel' => 'Tasker',//Yii::$app->name
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
	    ['label' => 'Главная', 'url' => ['/']],
        ['label' => 'Сотрудники', 'url' => ['/post/show']],
        ['label' => 'Поручения', 'url' => ['/poruchenie/index']],
	    ['label' => 'О сервисе', 'url' => ['/about']],
	    ['label' => 'Сообщить', 'url' => ['/contact']],
    ];

    if (Yii::$app->user->isGuest) {
	    $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/sign']];
	    $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {
	    $menuItems[] = '<li>'
		    . Html::beginForm(['/site/logout'], 'post')
		    . Html::submitButton(
			    'Выйти (' . Yii::$app->user->identity->username . ')',
			    ['class' => 'btn btn-link logout']
		    )
		    . Html::endForm()
		    . '</li>';
    }

    echo Nav::widget([
	    'options' => ['class' => 'navbar-nav navbar-right'],
	    'items' => $menuItems,
    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Главная', 'url' => '/'],
//	        ['label' => 'Поручения', 'url' => ['/post/index']],
//            ['label' => 'О сервисе', 'url' => ['/about']],
//            ['label' => 'Сообщить', 'url' => ['/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Войти', 'url' => ['/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Выйти (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
    NavBar::end();
    ?>

    <div class="container">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; it-academy by Igor Shabanovich  <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
