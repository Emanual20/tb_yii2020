<?php
/**
*  Team: TB2020, NKU
*  Coding by Jiang-tian Zhai 1812326, 20200611
*/
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Contactme]].
 *
 * @see Contactme
 */
class ContactmeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Contactme[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Contactme|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
