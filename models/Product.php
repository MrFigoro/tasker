<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 28.02.2018
 * Time: 22:08
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
	public static function tableName()
	{
		return 'products';
	}

	public function getCategories()
	{
		return $this->hasOne(Category::className(), ['id' => 'parent']);
	}

}