<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otchet".
 *
 * @property integer $id_otchet
 * @property integer $id_zadacha
 * @property string $otchet_date
 * @property string $resolution
 *
 * @property Zadacha[] $zadachas
 */
class Otchet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otchet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_zadacha', 'otchet_date', 'resolution'], 'required'],
            [['id_zadacha'], 'integer'],
            [['otchet_date'], 'safe'],
            [['resolution'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_otchet' => 'Id Otchet',
            'id_zadacha' => 'Id Zadacha',
            'otchet_date' => 'Otchet Date',
            'resolution' => 'Resolution',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZadachas()
    {
        return $this->hasMany(Zadacha::className(), ['id_otchet' => 'id_otchet']);
    }
}
