<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 27.02.2018
 * Time: 22:56
 */

namespace app\models;
//use yii\base\model;
use yii\db\ActiveRecord;

class SecondForm extends ActiveRecord
{
	public static function tableName()
	{
		return 'posts';
	}

	public function attributeLabels()
	  {
		  return [
		  	  'name' => 'Имя',
			  'email' => 'E-mail',
			  'text' => 'Текст сообщения',
		  ];
	  }

	  public function rules()
	  {
		  return [
			  [['name', 'text'], 'required'],
			  [['email', 'text'], 'safe'],
			  ['text', 'trim'],
		  ];
	  }

}