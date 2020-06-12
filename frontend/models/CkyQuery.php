<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CkyArticle]].
 *
 * @see CkyArticle
 */
class CkyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CkyArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CkyArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
