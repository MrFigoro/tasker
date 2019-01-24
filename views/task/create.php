<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Zadacha */

$this->title = 'Create Zadacha';
$this->params['breadcrumbs'][] = ['label' => 'Zadachas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadacha-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
