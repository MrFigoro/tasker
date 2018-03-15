<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\ZadachaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zadachas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zadacha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Zadacha', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_zadacha',
            'id_poruchenie',
            'creator',
            'ispolnitel',
            'content_zadanie:ntext',
            // 'create_date',
            // 'finish_date',
            // 'info_vipoln:ntext',
            // 'primechanie',
            // 'otmetka',
            // 'id_otchet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
