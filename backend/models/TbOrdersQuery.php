<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TbOrders]].
 *
 * @see TbOrders
 */
class TbOrdersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TbOrders[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TbOrders|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
