<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property string $id_kab
 * @property string $nama_kab
 *
 * @property MasterBencana[] $masterBencanas
 * @property Operator[] $operators
 * @property StokLogistik[] $stokLogistiks
 * @property Wilayah[] $wilayahs
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kab', 'nama_kab'], 'required'],
            [['id_kab'], 'string', 'max' => 10],
            [['nama_kab'], 'string', 'max' => 30],
            [['id_kab'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kab' => 'Id Kab',
            'nama_kab' => 'Nama Kab',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterBencanas()
    {
        return $this->hasMany(MasterBencana::className(), ['mid_kab' => 'id_kab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperators()
    {
        return $this->hasMany(Operator::className(), ['oid_kab' => 'id_kab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStokLogistiks()
    {
        return $this->hasMany(StokLogistik::className(), ['sid_kab' => 'id_kab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayahs()
    {
        return $this->hasMany(Wilayah::className(), ['wid_kab' => 'id_kab']);
    }
}
