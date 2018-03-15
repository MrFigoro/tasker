<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poruchenie".
 *
 * @property integer $id_poruchenie
 * @property string $incomming_number
 * @property string $receipt_date
 * @property string $outgoing_number
 * @property string $outgoing_date
 * @property integer $id_customer
 * @property string $topic
 * @property string $content
 * @property string $comment
 * @property integer $id_creator_poruch
 * @property string $entrust_date
 * @property integer $otmetka
 *
 * @property Customer $idCustomer
 * @property Sotrudnik $idCreatorPoruch
 * @property Zadacha[] $zadachas
 */
class Poruchenie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poruchenie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['incomming_number', 'receipt_date', 'id_customer', 'topic', 'content', 'id_creator_poruch', 'entrust_date'], 'required'],
            [['receipt_date', 'outgoing_date', 'entrust_date'], 'safe'],
            [['id_customer', 'id_creator_poruch', 'otmetka'], 'integer'],
            [['content'], 'string'],
            [['incomming_number', 'outgoing_number', 'topic', 'comment'], 'string', 'max' => 255],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'id_customer']],
            [['id_creator_poruch'], 'exist', 'skipOnError' => true, 'targetClass' => Sotrudnik::className(), 'targetAttribute' => ['id_creator_poruch' => 'id_sotrudnik']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_poruchenie' => 'Id Poruchenie',
            'incomming_number' => 'Incomming Number',
            'receipt_date' => 'Receipt Date',
            'outgoing_number' => 'Outgoing Number',
            'outgoing_date' => 'Outgoing Date',
            'id_customer' => 'Id Customer',
            'topic' => 'Topic',
            'content' => 'Content',
            'comment' => 'Comment',
            'id_creator_poruch' => 'Id Creator Poruch',
            'entrust_date' => 'Entrust Date',
            'otmetka' => 'Otmetka',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCustomer()
    {
        return $this->hasOne(Customer::className(), ['id_customer' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCreatorPoruch()
    {
        return $this->hasOne(Sotrudnik::className(), ['id_sotrudnik' => 'id_creator_poruch']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZadachas()
    {
        return $this->hasMany(Zadacha::className(), ['id_poruchenie' => 'id_poruchenie']);
    }
}
