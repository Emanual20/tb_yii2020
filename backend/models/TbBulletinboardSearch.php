<?php

/**
* Coding by Sakura, 20200609
**/

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TbBulletinboard;

/**
 * TbBulletinboardSearch represents the model behind the search form of `app\models\TbBulletinboard`.
 */
class TbBulletinboardSearch extends TbBulletinboard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_bId', 'tb_bUserid'], 'integer'],
            [['tb_bContent', 'tb_bPosttime'], 'safe'],
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
        $query = TbBulletinboard::find();

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
            'tb_bId' => $this->tb_bId,
            'tb_bUserid' => $this->tb_bUserid,
            'tb_bPosttime' => $this->tb_bPosttime,
        ]);

        $query->andFilterWhere(['like', 'tb_bContent', $this->tb_bContent]);

        return $dataProvider;
    }
}
