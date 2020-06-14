<?php

/**
*  Team: TB2020, NKU
*  Coding by Yi-ding Sun 1811425, 20200611
*/
namespace backend\models;

/**
 * This is the ActiveQuery class for [[TbBulletinboard]].
 *
 * @see TbBulletinboard
 */
class TbBulletinboardQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TbBulletinboard[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TbBulletinboard|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
