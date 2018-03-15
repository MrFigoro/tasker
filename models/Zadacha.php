<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zadacha".
 *
 * @property integer $id_zadacha
 * @property integer $id_poruchenie
 * @property integer $creator
 * @property integer $ispolnitel
 * @property string $content_zadanie
 * @property string $create_date
 * @property string $finish_date
 * @property string $info_vipoln
 * @property string $primechanie
 * @property integer $otmetka
 * @property integer $id_otchet
 *
 * @property Otchet $idOtchet
 * @property Poruchenie $idPoruchenie
 * @property Sotrudnik $creator0
 */
class Zadacha extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zadacha';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_poruchenie', 'creator', 'ispolnitel', 'content_zadanie', 'create_date', 'finish_date', 'primechanie'], 'required'],
            [['id_poruchenie', 'creator', 'ispolnitel', 'otmetka', 'id_otchet'], 'integer'],
            [['content_zadanie', 'info_vipoln'], 'string'],
            [['create_date', 'finish_date'], 'safe'],
            [['primechanie'], 'string', 'max' => 255],
            [['id_otchet'], 'exist', 'skipOnError' => true, 'targetClass' => Otchet::className(), 'targetAttribute' => ['id_otchet' => 'id_otchet']],
            [['id_poruchenie'], 'exist', 'skipOnError' => true, 'targetClass' => Poruchenie::className(), 'targetAttribute' => ['id_poruchenie' => 'id_poruchenie']],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => Sotrudnik::className(), 'targetAttribute' => ['creator' => 'id_sotrudnik']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_zadacha' => 'Id Zadacha',
            'id_poruchenie' => 'Id Poruchenie',
            'creator' => 'Creator',
            'ispolnitel' => 'Ispolnitel',
            'content_zadanie' => 'Content Zadanie',
            'create_date' => 'Create Date',
            'finish_date' => 'Finish Date',
            'info_vipoln' => 'Info Vipoln',
            'primechanie' => 'Primechanie',
            'otmetka' => 'Otmetka',
            'id_otchet' => 'Id Otchet',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOtchet()
    {
        return $this->hasOne(Otchet::className(), ['id_otchet' => 'id_otchet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPoruchenie()
    {
        return $this->hasOne(Poruchenie::className(), ['id_poruchenie' => 'id_poruchenie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator0()
    {
        return $this->hasOne(Sotrudnik::className(), ['id_sotrudnik' => 'creator']);
    }
}
