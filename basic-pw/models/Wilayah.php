<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property string $id_wilayah
 * @property string $nama_prov
 * @property string $wid_kab
 * @property string $wid_kec
 * @property string $wid_kel
 *
 * @property MasterBantuan[] $masterBantuans
 * @property MasterPermintaan[] $masterPermintaans
 * @property Kabupaten $widKab
 * @property Kecamatan $widKec
 * @property Kelurahan $widKel
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'nama_prov', 'wid_kab', 'wid_kec', 'wid_kel'], 'required'],
            [['id_wilayah', 'nama_prov', 'wid_kab', 'wid_kec', 'wid_kel'], 'string', 'max' => 10],
            [['id_wilayah'], 'unique'],
            [['wid_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['wid_kab' => 'id_kab']],
            [['wid_kec'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['wid_kec' => 'id_kec']],
            [['wid_kel'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['wid_kel' => 'id_kel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'nama_prov' => 'Nama Prov',
            'wid_kab' => 'Wid Kab',
            'wid_kec' => 'Wid Kec',
            'wid_kel' => 'Wid Kel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterBantuans()
    {
        return $this->hasMany(MasterBantuan::className(), ['mbid_wilayah' => 'id_wilayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPermintaans()
    {
        return $this->hasMany(MasterPermintaan::className(), ['mpid_wilayah' => 'id_wilayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWidKab()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'wid_kab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWidKec()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kec' => 'wid_kec']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWidKel()
    {
        return $this->hasOne(Kelurahan::className(), ['id_kel' => 'wid_kel']);
    }
}
