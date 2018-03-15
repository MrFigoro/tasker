<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id_customer
 * @property string $customer_name
 * @property string $email
 * @property string $phone
 *
 * @property Poruchenie[] $poruchenies
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'email'], 'required'],
            [['customer_name', 'phone'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => 'Id Customer',
            'customer_name' => 'Customer Name',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoruchenies()
    {
        return $this->hasMany(Poruchenie::className(), ['id_customer' => 'id_customer']);
    }
}
