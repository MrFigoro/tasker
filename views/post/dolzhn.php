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

echo '<ol>';
foreach($dolzh as $s) {
	echo '<li>' . $s['description']. '</li>';
}
echo '</ol>';
echo LinkPager::widget(['pagination' => $pagination]);

MyWidget::begin();
echo "<p>Должности может редактировать только администратор!</p>";
MyWidget::end();
