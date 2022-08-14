<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Wilayah;

/**
 * WilayahSearch represents the model behind the search form of `backend\models\Wilayah`.
 */
class WilayahSearch extends Wilayah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prov', 'kab', 'id', 'nama'], 'safe'],
            [['versi'], 'integer'],
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
        $query = Wilayah::find();

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
            'versi' => $this->versi,
        ]);

        $query->andFilterWhere(['like', 'prov', $this->prov])
            ->andFilterWhere(['like', 'kab', $this->kab])
            ->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
