<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 28.02.2018
 * Time: 22:08
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
	public static function tableName()
	{
		return 'categories';
	}

	public function getProducts()
	{
		return $this->hasMany(Product::className(), ['parent' => 'id']);
	}

}