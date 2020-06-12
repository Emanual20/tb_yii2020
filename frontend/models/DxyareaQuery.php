<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Dxyarea]].
 *
 * @see Dxyarea
 */
class DxyareaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Dxyarea[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Dxyarea|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
