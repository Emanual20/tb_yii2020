<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_order_status".
 *
 * @property int $tb_osId 订单状态编号
 * @property string $tb_osRemark 订单状态名称
 */
class TbOrderStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_order_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_osId', 'tb_osRemark'], 'required'],
            [['tb_osId'], 'integer'],
            [['tb_osRemark'], 'string', 'max' => 50],
            [['tb_osId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_osId' => '订单状态编号',
            'tb_osRemark' => '订单状态名称',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbOrderStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbOrderStatusQuery(get_called_class());
    }
}
