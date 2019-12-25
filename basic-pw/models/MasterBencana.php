<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_bencana".
 *
 * @property string $id_master_bencana
 * @property string $mid_bencana
 * @property string $mid_kab
 * @property double $latitude
 * @property double $longitude
 * @property string $tanggal_bencana
 * @property int $jml_kor_luka
 * @property int $jml_kor_meninggal
 * @property int $jml_kor_hilang
 * @property int $jml_kor_evakuasi
 * @property int $jml_rmh_rusak
 * @property int $jml_rmh_hancur
 * @property string $status_komunikasi
 * @property string $status_transportasi
 * @property string $status_tpt_kesehatan
 * @property string $status_pra_pendidikan
 * @property string $status_listrik
 * @property string $status_air_bersih
 * @property string $mid_operator
 *
 * @property Bencana $midBencana
 * @property Kabupaten $midKab
 * @property Operator $midOperator
 */
class MasterBencana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_bencana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_bencana', 'mid_bencana', 'mid_kab', 'latitude', 'longitude', 'tanggal_bencana', 'jml_kor_luka', 'jml_kor_meninggal', 'jml_kor_hilang', 'jml_kor_evakuasi', 'jml_rmh_rusak', 'jml_rmh_hancur', 'status_komunikasi', 'status_transportasi', 'status_tpt_kesehatan', 'status_pra_pendidikan', 'status_listrik', 'status_air_bersih', 'mid_operator'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['tanggal_bencana'], 'safe'],
            [['jml_kor_luka', 'jml_kor_meninggal', 'jml_kor_hilang', 'jml_kor_evakuasi', 'jml_rmh_rusak', 'jml_rmh_hancur'], 'integer'],
            [['status_komunikasi', 'status_transportasi', 'status_tpt_kesehatan', 'status_pra_pendidikan', 'status_listrik', 'status_air_bersih'], 'string'],
            [['id_master_bencana', 'mid_bencana', 'mid_kab', 'mid_operator'], 'string', 'max' => 10],
            [['id_master_bencana'], 'unique'],
            [['mid_bencana'], 'exist', 'skipOnError' => true, 'targetClass' => Bencana::className(), 'targetAttribute' => ['mid_bencana' => 'id_bencana']],
            [['mid_kab'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['mid_kab' => 'id_kab']],
            [['mid_operator'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['mid_operator' => 'id_operator']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_bencana' => 'Id Master Bencana',
            'mid_bencana' => 'Mid Bencana',
            'mid_kab' => 'Mid Kab',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'tanggal_bencana' => 'Tanggal Bencana',
            'jml_kor_luka' => 'Jml Kor Luka',
            'jml_kor_meninggal' => 'Jml Kor Meninggal',
            'jml_kor_hilang' => 'Jml Kor Hilang',
            'jml_kor_evakuasi' => 'Jml Kor Evakuasi',
            'jml_rmh_rusak' => 'Jml Rmh Rusak',
            'jml_rmh_hancur' => 'Jml Rmh Hancur',
            'status_komunikasi' => 'Status Komunikasi',
            'status_transportasi' => 'Status Transportasi',
            'status_tpt_kesehatan' => 'Status Tpt Kesehatan',
            'status_pra_pendidikan' => 'Status Pra Pendidikan',
            'status_listrik' => 'Status Listrik',
            'status_air_bersih' => 'Status Air Bersih',
            'mid_operator' => 'Mid Operator',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidBencana()
    {
        return $this->hasOne(Bencana::className(), ['id_bencana' => 'mid_bencana']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidKab()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kab' => 'mid_kab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidOperator()
    {
        return $this->hasOne(Operator::className(), ['id_operator' => 'mid_operator']);
    }
}
