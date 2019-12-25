<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kelurahan;

/**
 * KelurahanSearch represents the model behind the search form of `app\models\Kelurahan`.
 */
class KelurahanSearch extends Kelurahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kel', 'nama_kel'], 'safe'],
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
        $query = Kelurahan::find();

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
        $query->andFilterWhere(['like', 'id_kel', $this->id_kel])
            ->andFilterWhere(['like', 'nama_kel', $this->nama_kel]);

        return $dataProvider;
    }
}
