<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $id_brg
 * @property string $nama_brg
 *
 * @property DetailBantuan[] $detailBantuans
 * @property DetailPermintaan[] $detailPermintaans
 * @property StokLogistik[] $stokLogistiks
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_brg', 'nama_brg'], 'required'],
            [['id_brg'], 'string', 'max' => 10],
            [['nama_brg'], 'string', 'max' => 30],
            [['id_brg'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_brg' => 'Id Brg',
            'nama_brg' => 'Nama Brg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBantuans()
    {
        return $this->hasMany(DetailBantuan::className(), ['dbid_brg' => 'id_brg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaans()
    {
        return $this->hasMany(DetailPermintaan::className(), ['dpid_brg' => 'id_brg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStokLogistiks()
    {
        return $this->hasMany(StokLogistik::className(), ['sid_brg' => 'id_brg']);
    }
}
