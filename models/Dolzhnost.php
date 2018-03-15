<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 05.03.2018
 * Time: 18:53
 */

namespace app\models;
use yii\db\ActiveRecord;

class Dolzhnost extends ActiveRecord
{
	public function getSotrudnik()
	{
		return $this->hasMany(Sotrudnik::className(), ['id_dolzhnost' => 'id_dolzhnost']);
	}
}