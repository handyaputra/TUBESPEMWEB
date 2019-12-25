<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StokLogistik;

/**
 * StokLogistikSearch represents the model behind the search form of `app\models\StokLogistik`.
 */
class StokLogistikSearch extends StokLogistik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stok', 'sid_brg', 'sid_kab', 'satuan'], 'safe'],
            [['jumlah'], 'integer'],
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
        $query = StokLogistik::find();

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
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'id_stok', $this->id_stok])
            ->andFilterWhere(['like', 'sid_brg', $this->sid_brg])
            ->andFilterWhere(['like', 'sid_kab', $this->sid_kab])
            ->andFilterWhere(['like', 'satuan', $this->satuan]);

        return $dataProvider;
    }
}
