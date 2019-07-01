<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cardholder;

/**
 * CardholderSearch represents the model behind the search form of `app\models\Cardholder`.
 */
class CardholderSearch extends Cardholder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CardHolderID', 'Handicap', 'CardTypeID', 'HolderTypeID', 'SupplementaryHandicap', 'IsActive', 'CreatedBy'], 'integer'],
            [['Mobile', 'Name', 'SupplementaryMobile', 'SupplementaryName', 'CreatedOn', 'LastUpdated'], 'safe'],
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
        $query = Cardholder::find();

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
            'CardHolderID' => $this->CardHolderID,
            'Handicap' => $this->Handicap,
            'CardTypeID' => $this->CardTypeID,
            'HolderTypeID' => $this->HolderTypeID,
            'SupplementaryHandicap' => $this->SupplementaryHandicap,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
            'CreatedBy' => $this->CreatedBy,
        ]);

        $query->andFilterWhere(['like', 'Mobile', $this->Mobile])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'SupplementaryMobile', $this->SupplementaryMobile])
            ->andFilterWhere(['like', 'SupplementaryName', $this->SupplementaryName]);

        return $dataProvider;
    }
}
