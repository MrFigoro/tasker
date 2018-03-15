<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoruchenieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poruchenies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poruchenie-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Poruchenie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_poruchenie',
            'incomming_number',
            'receipt_date',
            'outgoing_number',
            'outgoing_date',
            // 'id_customer',
            // 'topic',
            // 'content:ntext',
            // 'comment',
            // 'id_creator_poruch',
            // 'entrust_date',
            // 'otmetka',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
