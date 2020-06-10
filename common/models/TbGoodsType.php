<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_goods_type".
 *
 * @property int $tb_gtId wuzi
 * @property string|null $tb_gtName temp
 */
class TbGoodsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_goods_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_gtId'], 'required'],
            [['tb_gtId'], 'integer'],
            [['tb_gtName'], 'string', 'max' => 100],
            [['tb_gtId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_gtId' => 'wuzi',
            'tb_gtName' => 'temp',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbGoodsTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbGoodsTypeQuery(get_called_class());
    }

    
}
