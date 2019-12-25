<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelurahan_imbas".
 *
 * @property string $id_imbas
 * @property string $kid_kel
 * @property int $jml_kor_laki
 * @property int $jml_kor_perempuan
 * @property int $jml_hil_laki
 * @property int $jml_hil_perempuan
 * @property int $jml_eva_laki
 * @property int $jml_eva_perempuan
 * @property int $jml_meninggal_laki
 * @property int $jml_meninggal_perempuan
 * @property string $pjg_jln_imbas
 *
 * @property Kelurahan $kidKel
 */
class KelurahanImbas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelurahan_imbas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_imbas', 'kid_kel', 'jml_kor_laki', 'jml_kor_perempuan', 'jml_hil_laki', 'jml_hil_perempuan', 'jml_eva_laki', 'jml_eva_perempuan', 'jml_meninggal_laki', 'jml_meninggal_perempuan', 'pjg_jln_imbas'], 'required'],
            [['jml_kor_laki', 'jml_kor_perempuan', 'jml_hil_laki', 'jml_hil_perempuan', 'jml_eva_laki', 'jml_eva_perempuan', 'jml_meninggal_laki', 'jml_meninggal_perempuan'], 'integer'],
            [['id_imbas', 'kid_kel', 'pjg_jln_imbas'], 'string', 'max' => 10],
            [['id_imbas'], 'unique'],
            [['kid_kel'], 'exist', 'skipOnError' => true, 'targetClass' => Kelurahan::className(), 'targetAttribute' => ['kid_kel' => 'id_kel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_imbas' => 'Id Imbas',
            'kid_kel' => 'Kid Kel',
            'jml_kor_laki' => 'Jml Kor Laki',
            'jml_kor_perempuan' => 'Jml Kor Perempuan',
            'jml_hil_laki' => 'Jml Hil Laki',
            'jml_hil_perempuan' => 'Jml Hil Perempuan',
            'jml_eva_laki' => 'Jml Eva Laki',
            'jml_eva_perempuan' => 'Jml Eva Perempuan',
            'jml_meninggal_laki' => 'Jml Meninggal Laki',
            'jml_meninggal_perempuan' => 'Jml Meninggal Perempuan',
            'pjg_jln_imbas' => 'Pjg Jln Imbas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKidKel()
    {
        return $this->hasOne(Kelurahan::className(), ['id_kel' => 'kid_kel']);
    }
}
