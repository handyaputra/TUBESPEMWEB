<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bencana".
 *
 * @property string $id_bencana
 * @property string $jenis_bencana
 *
 * @property MasterBencana[] $masterBencanas
 */
class Bencana extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bencana';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bencana', 'jenis_bencana'], 'required'],
            [['id_bencana'], 'string', 'max' => 10],
            [['jenis_bencana'], 'string', 'max' => 30],
            [['id_bencana'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bencana' => 'Id Bencana',
            'jenis_bencana' => 'Jenis Bencana',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterBencanas()
    {
        return $this->hasMany(MasterBencana::className(), ['mid_bencana' => 'id_bencana']);
    }
}
