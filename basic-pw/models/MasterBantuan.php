<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_bantuan".
 *
 * @property string $id_bantuan
 * @property string $mbid_wilayah
 * @property string $tanggal_bantuan
 * @property string $mbid_operator
 * @property string $tanggal_input
 *
 * @property DetailBantuan[] $detailBantuans
 * @property Operator $mbidOperator
 * @property Wilayah $mbidWilayah
 */
class MasterBantuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_bantuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bantuan', 'mbid_wilayah', 'tanggal_bantuan', 'mbid_operator', 'tanggal_input'], 'required'],
            [['tanggal_bantuan', 'tanggal_input'], 'safe'],
            [['id_bantuan', 'mbid_wilayah', 'mbid_operator'], 'string', 'max' => 10],
            [['id_bantuan'], 'unique'],
            [['mbid_operator'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['mbid_operator' => 'id_operator']],
            [['mbid_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::className(), 'targetAttribute' => ['mbid_wilayah' => 'id_wilayah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bantuan' => 'Id Bantuan',
            'mbid_wilayah' => 'Mbid Wilayah',
            'tanggal_bantuan' => 'Tanggal Bantuan',
            'mbid_operator' => 'Mbid Operator',
            'tanggal_input' => 'Tanggal Input',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBantuans()
    {
        return $this->hasMany(DetailBantuan::className(), ['dbid_bantuan' => 'id_bantuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbidOperator()
    {
        return $this->hasOne(Operator::className(), ['id_operator' => 'mbid_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbidWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'mbid_wilayah']);
    }
}
