<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Poruchenie */

$this->title = 'Create Poruchenie';
$this->params['breadcrumbs'][] = ['label' => 'Poruchenies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poruchenie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
