<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Zadacha */

$this->title = 'Update Zadacha: ' . $model->id_zadacha;
$this->params['breadcrumbs'][] = ['label' => 'Zadachas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_zadacha, 'url' => ['view', 'id' => $model->id_zadacha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zadacha-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
