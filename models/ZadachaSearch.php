<?php

namespace app\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\Models\Zadacha;

/**
 * ZadachaSearch represents the model behind the search form about `app\Models\Zadacha`.
 */
class ZadachaSearch extends Zadacha
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_zadacha', 'id_poruchenie', 'creator', 'ispolnitel', 'otmetka', 'id_otchet'], 'integer'],
            [['content_zadanie', 'create_date', 'finish_date', 'info_vipoln', 'primechanie'], 'safe'],
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
        $query = Zadacha::find();

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
            'id_zadacha' => $this->id_zadacha,
            'id_poruchenie' => $this->id_poruchenie,
            'creator' => $this->creator,
            'ispolnitel' => $this->ispolnitel,
            'create_date' => $this->create_date,
            'finish_date' => $this->finish_date,
            'otmetka' => $this->otmetka,
            'id_otchet' => $this->id_otchet,
        ]);

        $query->andFilterWhere(['like', 'content_zadanie', $this->content_zadanie])
            ->andFilterWhere(['like', 'info_vipoln', $this->info_vipoln])
            ->andFilterWhere(['like', 'primechanie', $this->primechanie]);

        return $dataProvider;
    }
}
