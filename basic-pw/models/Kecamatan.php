<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property string $id_kec
 * @property string $nama_kec
 *
 * @property Wilayah[] $wilayahs
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kec', 'nama_kec'], 'required'],
            [['id_kec'], 'string', 'max' => 10],
            [['nama_kec'], 'string', 'max' => 30],
            [['id_kec'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kec' => 'Id Kec',
            'nama_kec' => 'Nama Kec',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayahs()
    {
        return $this->hasMany(Wilayah::className(), ['wid_kec' => 'id_kec']);
    }
}
