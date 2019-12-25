<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operator".
 *
 * @property string $id_operator
 * @property string $oid_kab
 * @property string $nama_operator
 *
 * @property DetailBantuan[] $detailBantuans
 * @property DetailPermintaan[] $detailPermintaans
 * @property MasterBantuan[] $masterBantuans
 * @property MasterBencana[] $masterBencanas
 * @property MasterPermintaan[] $masterPermintaans
 * @property Kabupaten $oidKab
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_operator', 'oid_kab', 'nama_operator'], 'required'],
            [['id_operator', 'oid_kab'], 'string', 'max' => 10],
            [['nama_operator'], 'string', 'max' => 50],
            [['id_operator'], 'unique'],
            [['oid_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['oid_kab' => 'id_kab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_operator' => 'Id Operator',
            'oid_kab' => 'Oid Kab',
            'nama_operator' => 'Nama Operator',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBantuans()
    {
        return $this->hasMany(DetailBantuan::className(), ['dbid_operator' => 'id_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaans()
    {
        return $this->hasMany(DetailPermintaan::className(), ['dpid_operator' => 'id_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterBantuans()
    {
        return $this->hasMany(MasterBantuan::className(), ['mbid_operator' => 'id_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterBencanas()
    {
        return $this->hasMany(MasterBencana::className(), ['mid_operator' => 'id_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPermintaans()
    {
        return $this->hasMany(MasterPermintaan::className(), ['mpid_operator' => 'id_operator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOidKab()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'oid_kab']);
    }
}
