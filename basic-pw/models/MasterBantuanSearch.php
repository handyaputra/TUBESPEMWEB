<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterBantuan;

/**
 * MasterBantuanSearch represents the model behind the search form of `app\models\MasterBantuan`.
 */
class MasterBantuanSearch extends MasterBantuan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bantuan', 'mbid_wilayah', 'tanggal_bantuan', 'mbid_operator', 'tanggal_input'], 'safe'],
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
        $query = MasterBantuan::find();

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
            'tanggal_bantuan' => $this->tanggal_bantuan,
            'tanggal_input' => $this->tanggal_input,
        ]);

        $query->andFilterWhere(['like', 'id_bantuan', $this->id_bantuan])
            ->andFilterWhere(['like', 'mbid_wilayah', $this->mbid_wilayah])
            ->andFilterWhere(['like', 'mbid_operator', $this->mbid_operator]);

        return $dataProvider;
    }
}
