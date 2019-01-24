<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\TaskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zadacha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_zadacha') ?>

    <?= $form->field($model, 'id_poruchenie') ?>

    <?= $form->field($model, 'creator') ?>

    <?= $form->field($model, 'ispolnitel') ?>

    <?= $form->field($model, 'content_zadanie') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'finish_date') ?>

    <?php // echo $form->field($model, 'info_vipoln') ?>

    <?php // echo $form->field($model, 'primechanie') ?>

    <?php // echo $form->field($model, 'otmetka') ?>

    <?php // echo $form->field($model, 'id_otchet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
