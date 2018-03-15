<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\Zadacha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zadacha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_poruchenie')->textInput() ?>

    <?= $form->field($model, 'creator')->textInput() ?>

    <?= $form->field($model, 'ispolnitel')->textInput() ?>

    <?= $form->field($model, 'content_zadanie')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'finish_date')->textInput() ?>

    <?= $form->field($model, 'info_vipoln')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'primechanie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otmetka')->textInput() ?>

    <?= $form->field($model, 'id_otchet')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
