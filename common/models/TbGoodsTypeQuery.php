<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[TbGoodsType]].
 *
 * @see TbGoodsType
 */
class TbGoodsTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TbGoodsType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TbGoodsType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
