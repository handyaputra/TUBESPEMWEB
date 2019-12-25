<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_master_bantuan".
 *
 * @property string $id_bantuan
 * @property string $mbid_wilayah
 * @property string $tanggal_bantuan
 * @property string $mbid_operator
 * @property string $tanggal_input
 * @property string $nama_prov
 * @property string $nama_operator
 */
class DataMasterBantuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_master_bantuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bantuan', 'mbid_wilayah', 'tanggal_bantuan', 'mbid_operator', 'tanggal_input', 'nama_prov', 'nama_operator'], 'required'],
            [['tanggal_bantuan', 'tanggal_input'], 'safe'],
            [['id_bantuan', 'mbid_wilayah', 'mbid_operator', 'nama_prov'], 'string', 'max' => 10],
            [['nama_operator'], 'string', 'max' => 50],
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
            'nama_prov' => 'Nama Prov',
            'nama_operator' => 'Nama Operator',
        ];
    }
}
