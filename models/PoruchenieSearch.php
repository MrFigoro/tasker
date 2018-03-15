<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Poruchenie;

/**
 * PoruchenieSearch represents the model behind the search form about `app\models\Poruchenie`.
 */
class PoruchenieSearch extends Poruchenie
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_poruchenie', 'id_customer', 'id_creator_poruch', 'otmetka'], 'integer'],
            [['incomming_number', 'receipt_date', 'outgoing_number', 'outgoing_date', 'topic', 'content', 'comment', 'entrust_date'], 'safe'],
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
        $query = Poruchenie::find();

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
            'id_poruchenie' => $this->id_poruchenie,
            'receipt_date' => $this->receipt_date,
            'outgoing_date' => $this->outgoing_date,
            'id_customer' => $this->id_customer,
            'id_creator_poruch' => $this->id_creator_poruch,
            'entrust_date' => $this->entrust_date,
            'otmetka' => $this->otmetka,
        ]);

        $query->andFilterWhere(['like', 'incomming_number', $this->incomming_number])
            ->andFilterWhere(['like', 'outgoing_number', $this->outgoing_number])
            ->andFilterWhere(['like', 'topic', $this->topic])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
