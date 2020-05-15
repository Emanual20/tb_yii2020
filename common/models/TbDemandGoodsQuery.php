<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TbDemandGoods]].
 *
 * @see TbDemandGoods
 */
class TbDemandGoodsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TbDemandGoods[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TbDemandGoods|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
