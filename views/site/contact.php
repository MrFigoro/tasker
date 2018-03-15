<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Сообщить';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Ваше сообщение принято. Спасибо!
        </div>

        <p>
	        <?= yii\helpers\Html::a('Перейти на главную &raquo;', ['/'], ['class' => ['btn', 'btn-lg', 'btn-success']]) ?>
        </p>

    <?php else: ?>

        <p>
            Данной формой следует пользоваться, если в поручениях и задачах возникают какие-либо ошибки.
        </p>

        <div class="row">
            <div class="col-lg-7">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Имя') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject')->label('Тема') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 3])->label('Текст сообщения') ?>

                    <?= $form->field($model, 'verifyCode')->label('Слабо капчу угадать?')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-4">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Сообщить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
