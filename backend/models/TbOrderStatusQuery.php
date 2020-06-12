<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TbOrderStatus]].
 *
 * @see TbOrderStatus
 */
class TbOrderStatusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TbOrderStatus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TbOrderStatus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
