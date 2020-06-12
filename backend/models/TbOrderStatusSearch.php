<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbOrderStatus;

/**
 * TbOrderStatusSearch represents the model behind the search form of `backend\models\TbOrderStatus`.
 */
class TbOrderStatusSearch extends TbOrderStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_osId'], 'integer'],
            [['tb_osRemark'], 'safe'],
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
        $query = TbOrderStatus::find();

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
            'tb_osId' => $this->tb_osId,
        ]);

        $query->andFilterWhere(['like', 'tb_osRemark', $this->tb_osRemark]);

        return $dataProvider;
    }
}
