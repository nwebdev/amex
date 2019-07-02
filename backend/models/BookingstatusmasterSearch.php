<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bookingstatusmaster;

/**
 * BookingstatusmasterSearch represents the model behind the search form of `app\models\Bookingstatusmaster`.
 */
class BookingstatusmasterSearch extends Bookingstatusmaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookingStatusID'], 'integer'],
            [['bookingStatusValue'], 'safe'],
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
        $query = Bookingstatusmaster::find();

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
            'bookingStatusID' => $this->bookingStatusID,
        ]);

        $query->andFilterWhere(['like', 'bookingStatusValue', $this->bookingStatusValue]);

        return $dataProvider;
    }
}
