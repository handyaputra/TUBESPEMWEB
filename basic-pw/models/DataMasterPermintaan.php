<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_master_permintaan".
 *
 * @property string $id_permintaan
 * @property string $mpid_wilayah
 * @property string $tanggal_permintaan
 * @property string $mpid_operator
 * @property string $tanggal_approve
 * @property string $tanggal_input
 * @property string $nama_prov
 * @property string $nama_operator
 */
class DataMasterPermintaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_master_permintaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_permintaan', 'mpid_wilayah', 'tanggal_permintaan', 'mpid_operator', 'tanggal_approve', 'tanggal_input', 'nama_prov', 'nama_operator'], 'required'],
            [['tanggal_permintaan', 'tanggal_approve', 'tanggal_input'], 'safe'],
            [['id_permintaan', 'mpid_wilayah', 'mpid_operator', 'nama_prov'], 'string', 'max' => 10],
            [['nama_operator'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_permintaan' => 'Id Permintaan',
            'mpid_wilayah' => 'Mpid Wilayah',
            'tanggal_permintaan' => 'Tanggal Permintaan',
            'mpid_operator' => 'Mpid Operator',
            'tanggal_approve' => 'Tanggal Approve',
            'tanggal_input' => 'Tanggal Input',
            'nama_prov' => 'Nama Prov',
            'nama_operator' => 'Nama Operator',
        ];
    }
}
