<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 26.02.2018
 * Time: 11:35
 */

use app\components\MyWidget;
use yii\widgets\LinkPager;

$this->beginBlock('block1');
	echo "<h1>Сотрудники</h1>";
$this->endBlock();

echo "<h2>Всего сотрудников: ".$col."</h2>";

echo '<ol>';
foreach($sotr as $s) {
	echo '<li>';
	$dolzhnost = $s['dolzhnost'];
	echo $dolzhnost['description'];
	echo '<ul>';
	echo '<li>' .$s['last_name'] .' '. $s['first_name'] .' '. $s['middle_name'] .'</li>';
	echo '<li> e-mail: '. $s['email'] .'</li><li> тел.'. $s['phone_number'].  '</li></ul>';
	echo '</li>';
}
echo '</ol>';
//echo LinkPager::widget(['pagination' => $pagination]);


MyWidget::begin();
echo "	<div>
			<p>Должность выводится из таблицы должностей</p>
			<p>Информация о сотрудниках выводится из таблицы сотрудников</p>
			<p>Данная запись выводится виджетом</p>
		</div>";
MyWidget::end();
