<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Poruchenie */

$this->title = 'Update Poruchenie: ' . $model->id_poruchenie;
$this->params['breadcrumbs'][] = ['label' => 'Poruchenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_poruchenie, 'url' => ['view', 'id' => $model->id_poruchenie]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="poruchenie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
