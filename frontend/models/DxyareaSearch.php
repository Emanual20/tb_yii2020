<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dxyarea;

/**
 * DxyareaSearch represents the model behind the search form of `frontend\models\Dxyarea`.
 */
class DxyareaSearch extends Dxyarea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['locationId', 'continentName', 'continentEnglishName', 'countryName', 'countryEnglishName', 'countryFullName', 'provinceName', 'provinceEnglishName', 'provinceShortName', 'currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'comment', 'cities', 'updateTime'], 'safe'],
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
        $query = Dxyarea::find();

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
        ]);

        $query->andFilterWhere(['like', 'locationId', $this->locationId])
            ->andFilterWhere(['like', 'continentName', $this->continentName])
            ->andFilterWhere(['like', 'continentEnglishName', $this->continentEnglishName])
            ->andFilterWhere(['like', 'countryName', $this->countryName])
            ->andFilterWhere(['like', 'countryEnglishName', $this->countryEnglishName])
            ->andFilterWhere(['like', 'countryFullName', $this->countryFullName])
            ->andFilterWhere(['like', 'provinceName', $this->provinceName])
            ->andFilterWhere(['like', 'provinceEnglishName', $this->provinceEnglishName])
            ->andFilterWhere(['like', 'provinceShortName', $this->provinceShortName])
            ->andFilterWhere(['like', 'currentConfirmedCount', $this->currentConfirmedCount])
            ->andFilterWhere(['like', 'confirmedCount', $this->confirmedCount])
            ->andFilterWhere(['like', 'suspectedCount', $this->suspectedCount])
            ->andFilterWhere(['like', 'curedCount', $this->curedCount])
            ->andFilterWhere(['like', 'deadCount', $this->deadCount])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'cities', $this->cities])
            ->andFilterWhere(['like', 'updateTime', $this->updateTime]);

        return $dataProvider;
    }
}
