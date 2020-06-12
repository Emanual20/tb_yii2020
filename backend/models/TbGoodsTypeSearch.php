<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbGoodsType;

/**
 * TbGoodsTypeSearch represents the model behind the search form of `backend\models\TbGoodsType`.
 */
class TbGoodsTypeSearch extends TbGoodsType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_gtId'], 'integer'],
            [['tb_gtName'], 'safe'],
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
        $query = TbGoodsType::find();

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
            'tb_gtId' => $this->tb_gtId,
        ]);

        $query->andFilterWhere(['like', 'tb_gtName', $this->tb_gtName]);

        return $dataProvider;
    }
}
