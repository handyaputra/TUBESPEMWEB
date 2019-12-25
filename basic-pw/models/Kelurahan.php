<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelurahan".
 *
 * @property string $id_kel
 * @property string $nama_kel
 *
 * @property KelurahanImbas[] $kelurahanImbas
 * @property Wilayah[] $wilayahs
 */
class Kelurahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelurahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kel', 'nama_kel'], 'required'],
            [['id_kel'], 'string', 'max' => 10],
            [['nama_kel'], 'string', 'max' => 30],
            [['id_kel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kel' => 'Id Kel',
            'nama_kel' => 'Nama Kel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelurahanImbas()
    {
        return $this->hasMany(KelurahanImbas::className(), ['kid_kel' => 'id_kel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayahs()
    {
        return $this->hasMany(Wilayah::className(), ['wid_kel' => 'id_kel']);
    }
}
