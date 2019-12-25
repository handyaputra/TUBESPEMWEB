<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KelurahanImbas;

/**
 * KelurahanImbasSearch represents the model behind the search form of `app\models\KelurahanImbas`.
 */
class KelurahanImbasSearch extends KelurahanImbas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_imbas', 'kid_kel', 'pjg_jln_imbas'], 'safe'],
            [['jml_kor_laki', 'jml_kor_perempuan', 'jml_hil_laki', 'jml_hil_perempuan', 'jml_eva_laki', 'jml_eva_perempuan', 'jml_meninggal_laki', 'jml_meninggal_perempuan'], 'integer'],
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
        $query = KelurahanImbas::find();

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
            'jml_kor_laki' => $this->jml_kor_laki,
            'jml_kor_perempuan' => $this->jml_kor_perempuan,
            'jml_hil_laki' => $this->jml_hil_laki,
            'jml_hil_perempuan' => $this->jml_hil_perempuan,
            'jml_eva_laki' => $this->jml_eva_laki,
            'jml_eva_perempuan' => $this->jml_eva_perempuan,
            'jml_meninggal_laki' => $this->jml_meninggal_laki,
            'jml_meninggal_perempuan' => $this->jml_meninggal_perempuan,
        ]);

        $query->andFilterWhere(['like', 'id_imbas', $this->id_imbas])
            ->andFilterWhere(['like', 'kid_kel', $this->kid_kel])
            ->andFilterWhere(['like', 'pjg_jln_imbas', $this->pjg_jln_imbas]);

        return $dataProvider;
    }
}
