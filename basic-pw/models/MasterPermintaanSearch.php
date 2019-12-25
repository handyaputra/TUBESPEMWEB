<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterPermintaan;

/**
 * MasterPermintaanSearch represents the model behind the search form of `app\models\MasterPermintaan`.
 */
class MasterPermintaanSearch extends MasterPermintaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_permintaan', 'mpid_wilayah', 'tanggal_permintaan', 'mpid_operator', 'tanggal_approve', 'tanggal_input'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MasterPermintaan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tanggal_permintaan' => $this->tanggal_permintaan,
            'tanggal_approve' => $this->tanggal_approve,
            'tanggal_input' => $this->tanggal_input,
        ]);

        $query->andFilterWhere(['like', 'id_permintaan', $this->id_permintaan])
            ->andFilterWhere(['like', 'mpid_wilayah', $this->mpid_wilayah])
            ->andFilterWhere(['like', 'mpid_operator', $this->mpid_operator]);

        return $dataProvider;
    }
}
