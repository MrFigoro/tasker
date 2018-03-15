<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Tasker</h1>
        <h2>Приложение для создания и контроля поручений и задач</h2>

        <p class="lead">Что бы ознакомиться с проектом нажмите на кнопку:</p>

        <?= yii\helpers\Html::a('О проекте!', ['/about'], ['class' => ['btn', 'btn-lg', 'btn-success']]) ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Поручения</h2>

                <p>Первичным источником задач является поручение. Поручение, как правило, создает модератор
                после получения письма на почту от заказчика или от сотрудника. </p>

                <p><?= yii\helpers\Html::a('Поручения &raquo;', ['/poruchenie/index'], ['class' => ['btn', 'btn-default']]) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Задачи</h2>

                <p>Управление задачами полностью ложится на плечи администратора. Создание, удаление, изменение статуса и т.п.</p>

                <p><?= yii\helpers\Html::a('Задачи &raquo;', ['/zadacha/index'], ['class' => ['btn', 'btn-default']]) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Отзывы</h2>

                <p>Добавить отзывы вы можете отсавить в гостевой книге.</p>

                <p><a class="btn btn-default" href="http://x-chel.zzz.com.ua/">Гостевая книга &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
