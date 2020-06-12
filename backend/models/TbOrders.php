<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_orders".
 *
 * @property int $tb_oId 订单编号
 * @property int $tb_oSellId 订单卖方需求编号
 * @property int $tb_oBuyId 订单买方需求编号
 * @property int $tb_ostatus 订单状态
 */
class TbOrders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_oSellId', 'tb_oBuyId', 'tb_ostatus'], 'required'],
            [['tb_oSellId', 'tb_oBuyId', 'tb_ostatus'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_oId' => '订单编号',
            'tb_oSellId' => '订单卖方需求编号',
            'tb_oBuyId' => '订单买方需求编号',
            'tb_ostatus' => '订单状态',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbOrdersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbOrdersQuery(get_called_class());
    }
}
