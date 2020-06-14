<?php
/**
*  Team: TB2020, NKU
*  Coding by Yi-ding Sun 1811425, 20200611
*/
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbOrders;

/**
 * TbOrdersSearch represents the model behind the search form of `backend\models\TbOrders`.
 */
class TbOrdersSearch extends TbOrders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_oId', 'tb_oSellId', 'tb_oBuyId', 'tb_ostatus'], 'integer'],
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
        $query = TbOrders::find();

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
            'tb_oId' => $this->tb_oId,
            'tb_oSellId' => $this->tb_oSellId,
            'tb_oBuyId' => $this->tb_oBuyId,
            'tb_ostatus' => $this->tb_ostatus,
        ]);

        return $dataProvider;
    }
}
