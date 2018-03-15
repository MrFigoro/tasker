<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 05.03.2018
 * Time: 18:36
 */

namespace app\models;
use yii\db\ActiveRecord;

class Sotrudnik extends ActiveRecord
{
	public function getDolzhnost()
	{
		return $this->hasOne(Dolzhnost::className(), ['id_dolzhnost' => 'id_dolzhnost']);
	}
}