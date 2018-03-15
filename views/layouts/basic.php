<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
    <html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title><?= $this->title ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--	<h1> Hello BASIC!</h1>-->
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
<!--                    <a class="nav-link active" href="#">Active</a>-->
                    <?= Html::a('Главная', '/') ?>
                </li>
                <li class="nav-item">
<!--                    <a class="nav-link" href="#">Link</a>-->
	                <?= Html::a('Сотрудники', ['/post/show']) ?>
                </li>
                <li class="nav-item">
                    <!--                    <a class="nav-link" href="#">Link</a>-->
		            <?= Html::a('Должности', ['/post/dolzhn']) ?>
                </li>
                <li class="nav-item">
                    <!--                    <a class="nav-link" href="#">Link</a>-->
		            <?= Html::a('Добавить сотрудника', ['/post/index']) ?>
                </li>

                <li class="nav-item">

                    <!--                    <a class="nav-link" href="#">Link</a>-->
		            <?= Html::a('Задачи', ['/zadacha/index']) ?>
                </li>
                <li class="nav-item">

                    <!--                    <a class="nav-link" href="#">Link</a>-->
		            <?= Html::a('Поручения', ['/poruchenie/index']) ?>
                </li>

            </ul>

            <?php //debug($this->blocks)
                if (isset($this->blocks['block1'])):
                    echo $this->blocks['block1'];
                endif;
            ?>

	        <?= $content ?>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>