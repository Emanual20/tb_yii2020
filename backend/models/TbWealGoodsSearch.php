<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbWealGoods;

/**
 * TbWealGoodsSearch represents the model behind the search form of `backend\models\TbWealGoods`.
 */
class TbWealGoodsSearch extends TbWealGoods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_wgId', 'tb_wgUser', 'tb_wgType', 'tb_wgNum', 'tb_wgPrice'], 'integer'],
            [['tb_wgRemark', 'tb_wgAddress'], 'safe'],
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
        $query = TbWealGoods::find();

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
            'tb_wgId' => $this->tb_wgId,
            'tb_wgUser' => $this->tb_wgUser,
            'tb_wgType' => $this->tb_wgType,
            'tb_wgNum' => $this->tb_wgNum,
            'tb_wgPrice' => $this->tb_wgPrice,
        ]);

        $query->andFilterWhere(['like', 'tb_wgRemark', $this->tb_wgRemark])
            ->andFilterWhere(['like', 'tb_wgAddress', $this->tb_wgAddress]);

        return $dataProvider;
    }
}
