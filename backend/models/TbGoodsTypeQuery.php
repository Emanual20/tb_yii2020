<?php
/**
*  Team: TB2020, NKU
*  Coding by Jia-lin Dong 1811349, 20200608
*/
namespace backend\models;

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
