<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pao;

/**
 * paoSearch represents the model behind the search form about `app\models\pao`.
 */
class paoSearch extends pao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'address', 'e_mail', 'website', 'comment', 'gender'], 'safe'],
            [['cellphone'], 'integer'],
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
        $query = pao::find();

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
            'cellphone' => $this->cellphone,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'e_mail', $this->e_mail])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'gender', $this->gender]);

        return $dataProvider;
    }
}
