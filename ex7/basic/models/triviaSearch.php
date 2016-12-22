<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\trivia;

/**
 * triviaSearch represents the model behind the search form about `app\models\trivia`.
 */
class triviaSearch extends trivia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trivia_question', 'trivia_answer'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = trivia::find();

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
        $query->andFilterWhere(['like', 'trivia_question', $this->trivia_question])
            ->andFilterWhere(['like', 'trivia_answer', $this->trivia_answer]);

        return $dataProvider;
    }
}
