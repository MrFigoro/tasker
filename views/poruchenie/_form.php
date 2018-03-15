<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Poruchenie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poruchenie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'incomming_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_date')->textInput() ?>

    <?= $form->field($model, 'outgoing_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'outgoing_date')->textInput() ?>

    <?= $form->field($model, 'id_customer')->textInput() ?>

    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_creator_poruch')->textInput() ?>

    <?= $form->field($model, 'entrust_date')->textInput() ?>

    <?= $form->field($model, 'otmetka')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
