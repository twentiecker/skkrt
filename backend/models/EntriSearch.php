<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Entri;

/**
 * EntriSearch represents the model behind the search form of `backend\models\Entri`.
 */
class EntriSearch extends Entri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'b1r5', 'b2r2', 'b2r3', 'b2r4a', 'b2r4b', 'b2r4c', 'b2r4d', 'b2r5b', 'b3ar1ak4', 'b3ar1bk4', 'b3ar1ck4', 'b3ar1dk4', 'b3ar1ek4', 'b3ar1fk4', 'b3ar1gk4', 'b3ar1ak6', 'b3ar1bk6', 'b3ar1ck6', 'b3ar1dk6', 'b3ar1ek6', 'b3ar1fk6', 'b3ar2k4', 'b3ar2k6', 'b3br3k4', 'b3br4bk4', 'b3br4ck4', 'b3br4dk4', 'b3br4dk6', 'b3br4ek6', 'b3br5ak4', 'b3br5bk4', 'b3br5bk6', 'b3br6ak4', 'b3br6ck4', 'b3br6ak6', 'b3br7ak4', 'b3br7ck4', 'b3br8ak4', 'b3br8bk4', 'b3br9k4', 'b3br10k4', 'b3br11k4', 'b3br12ak4', 'b3br12bk4', 'b3br12ak6', 'b4r1a', 'b4r2a', 'b4r2b', 'b4r2c', 'b4r2d', 'b4r2e', 'b4r2f', 'b4r2g', 'b4r2h', 'b4r2i', 'b4r3', 'b4r4', 'b6r2', 'b6r5'], 'integer'],
            [['b1r1', 'b1r2', 'b1r3', 'b1r4', 'b1r6', 'b1r7', 'b2r1', 'b6r1a', 'b6r1b', 'b6r3', 'b6r4a', 'b6r4b', 'b6r6', 'b7cat', 'created_at'], 'safe'],
            [['b2r5a', 'b3ar1sumk2', 'b3ar1ak2', 'b3ar1bk2', 'b3ar1ck2', 'b3ar1dk2', 'b3ar1ek2', 'b3ar1fk2', 'b3ar1gk2', 'b3ar1sumk3', 'b3ar1ak3', 'b3ar1bk3', 'b3ar1ck3', 'b3ar1dk3', 'b3ar1ek3', 'b3ar1fk3', 'b3ar1gk3', 'b3ar1sumk5', 'b3ar1ak5', 'b3ar1bk5', 'b3ar1ck5', 'b3ar1dk5', 'b3ar1ek5', 'b3ar1fk5', 'b3ar1gk5', 'b3ar1ak7', 'b3ar1bk7', 'b3ar1ck7', 'b3ar1dk7', 'b3ar1ek7', 'b3ar1fk7', 'b3ar2k2', 'b3ar2k3', 'b3ar2k5', 'b3ar2k7', 'b3asumk2', 'b3asumk3', 'b3asumk5', 'b3br3k2', 'b3br3k3', 'b3br3k5', 'b3br4sumk2', 'b3br4ak2', 'b3br4bk2', 'b3br4ck2', 'b3br4dk2', 'b3br4ek2', 'b3br4sumk3', 'b3br4ak3', 'b3br4bk3', 'b3br4ck3', 'b3br4dk3', 'b3br4ek3', 'b3br4sumk5', 'b3br4bk5', 'b3br4ck5', 'b3br4dk5', 'b3br4dk7', 'b3br4ek7', 'b3br5sumk2', 'b3br5ak2', 'b3br5bk2', 'b3br5ck2', 'b3br5sumk3', 'b3br5ak3', 'b3br5bk3', 'b3br5ck3', 'b3br5sumk5', 'b3br5ak5', 'b3br5bk5', 'b3br5bk7', 'b3br6sumk2', 'b3br6ak2', 'b3br6bk2', 'b3br6ck2', 'b3br6sumk3', 'b3br6ak3', 'b3br6bk3', 'b3br6ck3', 'b3br6sumk5', 'b3br6ak5', 'b3br6ck5', 'b3br6ak7', 'b3br7sumk2', 'b3br7ak2', 'b3br7bk2', 'b3br7ck2', 'b3br7dk2', 'b3br7sumk3', 'b3br7ak3', 'b3br7bk3', 'b3br7ck3', 'b3br7dk3', 'b3br7sumk5', 'b3br7ak5', 'b3br7ck5', 'b3br8sumk2', 'b3br8ak2', 'b3br8bk2', 'b3br8sumk3', 'b3br8ak3', 'b3br8bk3', 'b3br8sumk5', 'b3br8ak5', 'b3br8bk5', 'b3br9k2', 'b3br9k3', 'b3br9k5', 'b3br10k2', 'b3br10k3', 'b3br10k5', 'b3br11k2', 'b3br11k3', 'b3br11k5', 'b3br12sumk2', 'b3br12ak2', 'b3br12bk2', 'b3br12sumk3', 'b3br12ak3', 'b3br12bk3', 'b3br12sumk5', 'b3br12ak5', 'b3br12bk5', 'b3br12ak7', 'b3bsumk2', 'b3bsumk3', 'b3bsumk5', 'b3sumk3', 'b3sumk5', 'b4r1b', 'b5r1', 'b5r2', 'b5r3', 'b5r4', 'b5sum'], 'number'],
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
        $q = substr(Yii::$app->user->identity->username, 0, 2);
        $w = substr(Yii::$app->user->identity->username, 2, 2);

        if ($w == '00')
        {
            $query = Entri::find()
            ->where(['b1r1' => $q]);
        } else if (Yii::$app->user->identity->username == 'superadmin')
        {
            $query = Entri::find();            

        } else
        {
            $query = Entri::find()
            ->where(['b1r1' => $q, 'b1r2' => $w]);
        }

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
            'id' => $this->id,
            'b1r5' => $this->b1r5,
            'b2r2' => $this->b2r2,
            'b2r3' => $this->b2r3,
            'b2r4a' => $this->b2r4a,
            'b2r4b' => $this->b2r4b,
            'b2r4c' => $this->b2r4c,
            'b2r4d' => $this->b2r4d,
            'b2r5a' => $this->b2r5a,
            'b2r5b' => $this->b2r5b,
            'b3ar1sumk2' => $this->b3ar1sumk2,
            'b3ar1ak2' => $this->b3ar1ak2,
            'b3ar1bk2' => $this->b3ar1bk2,
            'b3ar1ck2' => $this->b3ar1ck2,
            'b3ar1dk2' => $this->b3ar1dk2,
            'b3ar1ek2' => $this->b3ar1ek2,
            'b3ar1fk2' => $this->b3ar1fk2,
            'b3ar1gk2' => $this->b3ar1gk2,
            'b3ar1sumk3' => $this->b3ar1sumk3,
            'b3ar1ak3' => $this->b3ar1ak3,
            'b3ar1bk3' => $this->b3ar1bk3,
            'b3ar1ck3' => $this->b3ar1ck3,
            'b3ar1dk3' => $this->b3ar1dk3,
            'b3ar1ek3' => $this->b3ar1ek3,
            'b3ar1fk3' => $this->b3ar1fk3,
            'b3ar1gk3' => $this->b3ar1gk3,
            'b3ar1ak4' => $this->b3ar1ak4,
            'b3ar1bk4' => $this->b3ar1bk4,
            'b3ar1ck4' => $this->b3ar1ck4,
            'b3ar1dk4' => $this->b3ar1dk4,
            'b3ar1ek4' => $this->b3ar1ek4,
            'b3ar1fk4' => $this->b3ar1fk4,
            'b3ar1gk4' => $this->b3ar1gk4,
            'b3ar1sumk5' => $this->b3ar1sumk5,
            'b3ar1ak5' => $this->b3ar1ak5,
            'b3ar1bk5' => $this->b3ar1bk5,
            'b3ar1ck5' => $this->b3ar1ck5,
            'b3ar1dk5' => $this->b3ar1dk5,
            'b3ar1ek5' => $this->b3ar1ek5,
            'b3ar1fk5' => $this->b3ar1fk5,
            'b3ar1gk5' => $this->b3ar1gk5,
            'b3ar1ak6' => $this->b3ar1ak6,
            'b3ar1bk6' => $this->b3ar1bk6,
            'b3ar1ck6' => $this->b3ar1ck6,
            'b3ar1dk6' => $this->b3ar1dk6,
            'b3ar1ek6' => $this->b3ar1ek6,
            'b3ar1fk6' => $this->b3ar1fk6,
            'b3ar1ak7' => $this->b3ar1ak7,
            'b3ar1bk7' => $this->b3ar1bk7,
            'b3ar1ck7' => $this->b3ar1ck7,
            'b3ar1dk7' => $this->b3ar1dk7,
            'b3ar1ek7' => $this->b3ar1ek7,
            'b3ar1fk7' => $this->b3ar1fk7,
            'b3ar2k2' => $this->b3ar2k2,
            'b3ar2k3' => $this->b3ar2k3,
            'b3ar2k4' => $this->b3ar2k4,
            'b3ar2k5' => $this->b3ar2k5,
            'b3ar2k6' => $this->b3ar2k6,
            'b3ar2k7' => $this->b3ar2k7,
            'b3asumk2' => $this->b3asumk2,
            'b3asumk3' => $this->b3asumk3,
            'b3asumk5' => $this->b3asumk5,
            'b3br3k2' => $this->b3br3k2,
            'b3br3k3' => $this->b3br3k3,
            'b3br3k4' => $this->b3br3k4,
            'b3br3k5' => $this->b3br3k5,
            'b3br4sumk2' => $this->b3br4sumk2,
            'b3br4ak2' => $this->b3br4ak2,
            'b3br4bk2' => $this->b3br4bk2,
            'b3br4ck2' => $this->b3br4ck2,
            'b3br4dk2' => $this->b3br4dk2,
            'b3br4ek2' => $this->b3br4ek2,
            'b3br4sumk3' => $this->b3br4sumk3,
            'b3br4ak3' => $this->b3br4ak3,
            'b3br4bk3' => $this->b3br4bk3,
            'b3br4ck3' => $this->b3br4ck3,
            'b3br4dk3' => $this->b3br4dk3,
            'b3br4ek3' => $this->b3br4ek3,
            'b3br4bk4' => $this->b3br4bk4,
            'b3br4ck4' => $this->b3br4ck4,
            'b3br4dk4' => $this->b3br4dk4,
            'b3br4sumk5' => $this->b3br4sumk5,
            'b3br4bk5' => $this->b3br4bk5,
            'b3br4ck5' => $this->b3br4ck5,
            'b3br4dk5' => $this->b3br4dk5,
            'b3br4dk6' => $this->b3br4dk6,
            'b3br4ek6' => $this->b3br4ek6,
            'b3br4dk7' => $this->b3br4dk7,
            'b3br4ek7' => $this->b3br4ek7,
            'b3br5sumk2' => $this->b3br5sumk2,
            'b3br5ak2' => $this->b3br5ak2,
            'b3br5bk2' => $this->b3br5bk2,
            'b3br5ck2' => $this->b3br5ck2,
            'b3br5sumk3' => $this->b3br5sumk3,
            'b3br5ak3' => $this->b3br5ak3,
            'b3br5bk3' => $this->b3br5bk3,
            'b3br5ck3' => $this->b3br5ck3,
            'b3br5ak4' => $this->b3br5ak4,
            'b3br5bk4' => $this->b3br5bk4,
            'b3br5sumk5' => $this->b3br5sumk5,
            'b3br5ak5' => $this->b3br5ak5,
            'b3br5bk5' => $this->b3br5bk5,
            'b3br5bk6' => $this->b3br5bk6,
            'b3br5bk7' => $this->b3br5bk7,
            'b3br6sumk2' => $this->b3br6sumk2,
            'b3br6ak2' => $this->b3br6ak2,
            'b3br6bk2' => $this->b3br6bk2,
            'b3br6ck2' => $this->b3br6ck2,
            'b3br6sumk3' => $this->b3br6sumk3,
            'b3br6ak3' => $this->b3br6ak3,
            'b3br6bk3' => $this->b3br6bk3,
            'b3br6ck3' => $this->b3br6ck3,
            'b3br6ak4' => $this->b3br6ak4,
            'b3br6ck4' => $this->b3br6ck4,
            'b3br6sumk5' => $this->b3br6sumk5,
            'b3br6ak5' => $this->b3br6ak5,
            'b3br6ck5' => $this->b3br6ck5,
            'b3br6ak6' => $this->b3br6ak6,
            'b3br6ak7' => $this->b3br6ak7,
            'b3br7sumk2' => $this->b3br7sumk2,
            'b3br7ak2' => $this->b3br7ak2,
            'b3br7bk2' => $this->b3br7bk2,
            'b3br7ck2' => $this->b3br7ck2,
            'b3br7dk2' => $this->b3br7dk2,
            'b3br7sumk3' => $this->b3br7sumk3,
            'b3br7ak3' => $this->b3br7ak3,
            'b3br7bk3' => $this->b3br7bk3,
            'b3br7ck3' => $this->b3br7ck3,
            'b3br7dk3' => $this->b3br7dk3,
            'b3br7ak4' => $this->b3br7ak4,
            'b3br7ck4' => $this->b3br7ck4,
            'b3br7sumk5' => $this->b3br7sumk5,
            'b3br7ak5' => $this->b3br7ak5,
            'b3br7ck5' => $this->b3br7ck5,
            'b3br8sumk2' => $this->b3br8sumk2,
            'b3br8ak2' => $this->b3br8ak2,
            'b3br8bk2' => $this->b3br8bk2,
            'b3br8sumk3' => $this->b3br8sumk3,
            'b3br8ak3' => $this->b3br8ak3,
            'b3br8bk3' => $this->b3br8bk3,
            'b3br8ak4' => $this->b3br8ak4,
            'b3br8bk4' => $this->b3br8bk4,
            'b3br8sumk5' => $this->b3br8sumk5,
            'b3br8ak5' => $this->b3br8ak5,
            'b3br8bk5' => $this->b3br8bk5,
            'b3br9k2' => $this->b3br9k2,
            'b3br9k3' => $this->b3br9k3,
            'b3br9k4' => $this->b3br9k4,
            'b3br9k5' => $this->b3br9k5,
            'b3br10k2' => $this->b3br10k2,
            'b3br10k3' => $this->b3br10k3,
            'b3br10k4' => $this->b3br10k4,
            'b3br10k5' => $this->b3br10k5,
            'b3br11k2' => $this->b3br11k2,
            'b3br11k3' => $this->b3br11k3,
            'b3br11k4' => $this->b3br11k4,
            'b3br11k5' => $this->b3br11k5,
            'b3br12sumk2' => $this->b3br12sumk2,
            'b3br12ak2' => $this->b3br12ak2,
            'b3br12bk2' => $this->b3br12bk2,
            'b3br12sumk3' => $this->b3br12sumk3,
            'b3br12ak3' => $this->b3br12ak3,
            'b3br12bk3' => $this->b3br12bk3,
            'b3br12ak4' => $this->b3br12ak4,
            'b3br12bk4' => $this->b3br12bk4,
            'b3br12sumk5' => $this->b3br12sumk5,
            'b3br12ak5' => $this->b3br12ak5,
            'b3br12bk5' => $this->b3br12bk5,
            'b3br12ak6' => $this->b3br12ak6,
            'b3br12ak7' => $this->b3br12ak7,
            'b3bsumk2' => $this->b3bsumk2,
            'b3bsumk3' => $this->b3bsumk3,
            'b3bsumk5' => $this->b3bsumk5,
            'b3sumk3' => $this->b3sumk3,
            'b3sumk5' => $this->b3sumk5,
            'b4r1a' => $this->b4r1a,
            'b4r1b' => $this->b4r1b,
            'b4r2a' => $this->b4r2a,
            'b4r2b' => $this->b4r2b,
            'b4r2c' => $this->b4r2c,
            'b4r2d' => $this->b4r2d,
            'b4r2e' => $this->b4r2e,
            'b4r2f' => $this->b4r2f,
            'b4r2g' => $this->b4r2g,
            'b4r2h' => $this->b4r2h,
            'b4r2i' => $this->b4r2i,
            'b4r3' => $this->b4r3,
            'b4r4' => $this->b4r4,
            'b5r1' => $this->b5r1,
            'b5r2' => $this->b5r2,
            'b5r3' => $this->b5r3,
            'b5r4' => $this->b5r4,
            'b5sum' => $this->b5sum,
            'b6r2' => $this->b6r2,
            'b6r3' => $this->b6r3,
            'b6r5' => $this->b6r5,
            'b6r6' => $this->b6r6,
            'created_at' => $this->created_at,
        ]);

$query->andFilterWhere(['like', 'b1r1', $this->b1r1])
->andFilterWhere(['like', 'b1r2', $this->b1r2])
->andFilterWhere(['like', 'b1r3', $this->b1r3])
->andFilterWhere(['like', 'b1r4', $this->b1r4])
->andFilterWhere(['like', 'b1r6', $this->b1r6])
->andFilterWhere(['like', 'b1r7', $this->b1r7])
->andFilterWhere(['like', 'b2r1', $this->b2r1])
->andFilterWhere(['like', 'b6r1a', $this->b6r1a])
->andFilterWhere(['like', 'b6r1b', $this->b6r1b])
->andFilterWhere(['like', 'b6r4a', $this->b6r4a])
->andFilterWhere(['like', 'b6r4b', $this->b6r4b])
->andFilterWhere(['like', 'b7cat', $this->b7cat]);

return $dataProvider;
}
}
