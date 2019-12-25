<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterBencana;

/**
 * MasterBencanaSearch represents the model behind the search form of `app\models\MasterBencana`.
 */
class MasterBencanaSearch extends MasterBencana
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_bencana', 'mid_bencana', 'mid_kab', 'tanggal_bencana', 'status_komunikasi', 'status_transportasi', 'status_tpt_kesehatan', 'status_pra_pendidikan', 'status_listrik', 'status_air_bersih', 'mid_operator'], 'safe'],
            [['latitude', 'longitude'], 'number'],
            [['jml_kor_luka', 'jml_kor_meninggal', 'jml_kor_hilang', 'jml_kor_evakuasi', 'jml_rmh_rusak', 'jml_rmh_hancur'], 'integer'],
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
        $query = MasterBencana::find();

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
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'tanggal_bencana' => $this->tanggal_bencana,
            'jml_kor_luka' => $this->jml_kor_luka,
            'jml_kor_meninggal' => $this->jml_kor_meninggal,
            'jml_kor_hilang' => $this->jml_kor_hilang,
            'jml_kor_evakuasi' => $this->jml_kor_evakuasi,
            'jml_rmh_rusak' => $this->jml_rmh_rusak,
            'jml_rmh_hancur' => $this->jml_rmh_hancur,
        ]);

        $query->andFilterWhere(['like', 'id_master_bencana', $this->id_master_bencana])
            ->andFilterWhere(['like', 'mid_bencana', $this->mid_bencana])
            ->andFilterWhere(['like', 'mid_kab', $this->mid_kab])
            ->andFilterWhere(['like', 'status_komunikasi', $this->status_komunikasi])
            ->andFilterWhere(['like', 'status_transportasi', $this->status_transportasi])
            ->andFilterWhere(['like', 'status_tpt_kesehatan', $this->status_tpt_kesehatan])
            ->andFilterWhere(['like', 'status_pra_pendidikan', $this->status_pra_pendidikan])
            ->andFilterWhere(['like', 'status_listrik', $this->status_listrik])
            ->andFilterWhere(['like', 'status_air_bersih', $this->status_air_bersih])
            ->andFilterWhere(['like', 'mid_operator', $this->mid_operator]);

        return $dataProvider;
    }
}
