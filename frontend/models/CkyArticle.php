<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%cky_article}}".
 *
 * @property int $aid 自增列
 * @property string $title 标题
 * @property string|null $content 文章内容
 */
class CkyArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cky_article}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aid' => '自增列',
            'title' => '标题',
            'content' => '文章内容',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CkyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CkyQuery(get_called_class());
    }
}
