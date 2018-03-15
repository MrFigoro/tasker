<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Poruchenie */

$this->title = $model->id_poruchenie;
$this->params['breadcrumbs'][] = ['label' => 'Poruchenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poruchenie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_poruchenie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_poruchenie], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_poruchenie',
            'incomming_number',
            'receipt_date',
            'outgoing_number',
            'outgoing_date',
            'id_customer',
            'topic',
            'content:ntext',
            'comment',
            'id_creator_poruch',
            'entrust_date',
            'otmetka',
        ],
    ]) ?>

</div>
