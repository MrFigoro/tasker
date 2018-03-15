<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 27.02.2018
 * Time: 22:56
 */

namespace app\models;
use yii\db\ActiveRecord;
use yii\base\Model;

class TestForm extends ActiveRecord
{
	public $verifyCode;
	public static function tableName() {
		return 'sotrudnik';
	}

	public function attributeLabels()
	{
		return [
			'first_name' => 'Имя',
			'last_name' => 'Фамилия',
			'middle_name' => 'Отчество',
			'id_dolzhnost' => 'Номер должности',
			'phone_number' => 'Номер телефона',
			'email' => 'E-mail'
		];
	}
	public function rules()
	{
		return [
			[['first_name', 'last_name','phone_number', 'email'], 'required', /*'message' => 'Поле обязательно'*/],
			['email', 'email'],
			['first_name', 'string', 'length' => [2, 15]],
			['last_name', 'string', 'length' => [2, 20]],
			//['id_dolzhnost', 'integer', 'length' => [1, 2]],
			//['name', 'myRule'],
			['phone_number', 'trim'],
			[['first_name','last_name','middle_name', 'id_dolzhnost'], 'trim'],
			['verifyCode', 'captcha'],
		]; // TODO: Change the autogenerated stub
	}
/*	public function myRule($attrs)
	{
		if (!in_array($this->$attrs, ['hello', 'world']))
		{$this->addError($attrs, 'Wrong!');
		}
	}*/
}