<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoruchenieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poruchenie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_poruchenie') ?>

    <?= $form->field($model, 'incomming_number') ?>

    <?= $form->field($model, 'receipt_date') ?>

    <?= $form->field($model, 'outgoing_number') ?>

    <?= $form->field($model, 'outgoing_date') ?>

    <?php // echo $form->field($model, 'id_customer') ?>

    <?php // echo $form->field($model, 'topic') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'id_creator_poruch') ?>

    <?php // echo $form->field($model, 'entrust_date') ?>

    <?php // echo $form->field($model, 'otmetka') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
