<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stok_logistik".
 *
 * @property string $id_stok
 * @property string $sid_brg
 * @property string $sid_kab
 * @property int $jumlah
 * @property string $satuan
 *
 * @property DetailBantuan[] $detailBantuans
 * @property DetailPermintaan[] $detailPermintaans
 * @property Barang $sidBrg
 * @property Kabupaten $sidKab
 */
class StokLogistik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stok_logistik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok', 'sid_brg', 'sid_kab', 'jumlah', 'satuan'], 'required'],
            [['jumlah'], 'integer'],
            [['satuan'], 'string'],
            [['id_stok', 'sid_brg', 'sid_kab'], 'string', 'max' => 10],
            [['id_stok'], 'unique'],
            [['sid_brg'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['sid_brg' => 'id_brg']],
            [['sid_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['sid_kab' => 'id_kab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stok' => 'Id Stok',
            'sid_brg' => 'Sid Brg',
            'sid_kab' => 'Sid Kab',
            'jumlah' => 'Jumlah',
            'satuan' => 'Satuan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailBantuans()
    {
        return $this->hasMany(DetailBantuan::className(), ['dbid_stok' => 'id_stok']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaans()
    {
        return $this->hasMany(DetailPermintaan::className(), ['dpid_stok' => 'id_stok']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidBrg()
    {
        return $this->hasOne(Barang::className(), ['id_brg' => 'sid_brg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSidKab()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'sid_kab']);
    }
}
