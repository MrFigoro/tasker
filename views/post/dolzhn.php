<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 05.03.2018
 * Time: 19:52
 */

use app\components\MyWidget;
use yii\widgets\LinkPager;

$this->beginBlock('block1');
	echo "<h1>Должности</h1>";
$this->endBlock();

echo "<h2>Всего должностей: ".$dc."</h2>";

//echo MyWidget::widget(['nameW' => 'Вася']); // Виджет с передачей параметров
//echo MyWidget::widget(/*['nameW' => 'Вася']*/);

//debug($cats);
//echo count($cats->products); //до обращения к products создается один объект

//echo count($cats[0]->products);
//debug($cats)

echo '<ul>';
foreach($dolzh as $s) {
	echo '<li>' . $s['description']. ' - ID должности: '.$s['id_dolzhnost'].'</li>';
}
echo '</ul>';
echo LinkPager::widget(['pagination' => $pagination]);

MyWidget::begin();
echo "<p>Должности и их ID выводятся из таблицы должностей!</p>";
MyWidget::end();
