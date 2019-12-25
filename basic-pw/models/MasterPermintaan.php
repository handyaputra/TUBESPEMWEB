<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_permintaan".
 *
 * @property string $id_permintaan
 * @property string $mpid_wilayah
 * @property string $tanggal_permintaan
 * @property string $mpid_operator
 * @property string $tanggal_approve
 * @property string $tanggal_input
 *
 * @property DetailPermintaan[] $detailPermintaans
 * @property Wilayah $mpidWilayah
 * @property Operator $mpidOperator
 */
class MasterPermintaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_permintaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_permintaan', 'mpid_wilayah', 'tanggal_permintaan', 'mpid_operator', 'tanggal_approve', 'tanggal_input'], 'required'],
            [['tanggal_permintaan', 'tanggal_approve', 'tanggal_input'], 'safe'],
            [['id_permintaan', 'mpid_wilayah', 'mpid_operator'], 'string', 'max' => 10],
            [['id_permintaan'], 'unique'],
            [['mpid_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::className(), 'targetAttribute' => ['mpid_wilayah' => 'id_wilayah']],
            [['mpid_operator'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['mpid_operator' => 'id_operator']],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaans()
    {
        return $this->hasMany(DetailPermintaan::className(), ['dpid_permintaan' => 'id_permintaan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMpidWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'mpid_wilayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMpidOperator()
    {
        return $this->hasOne(Operator::className(), ['id_operator' => 'mpid_operator']);
    }
}
