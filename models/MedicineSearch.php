<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Medicine;

/**
 * MedicineSearch represents the model behind the search form of `app\models\Medicine`.
 */
class MedicineSearch extends Medicine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status_medicine'], 'integer'],
            [['name_medicine', 'detail_medicine'], 'safe'],
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
        $query = Medicine::find();

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
            'status_medicine' => $this->status_medicine,
        ]);

        $query->andFilterWhere(['like', 'name_medicine', $this->name_medicine])
            ->andFilterWhere(['like', 'detail_medicine', $this->detail_medicine]);

        return $dataProvider;
    }
}
