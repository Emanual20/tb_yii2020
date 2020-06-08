<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tb_demand_goods}}".
 *
 * @property int $tb_dgId 需求编号
 * @property int $tb_dgUser 需求发布者
 * @property string $tb_dgType 物资类型
 * @property int|null $tb_dgNum 物资数量
 * @property int|null $tb_dgPrice 物资价格
 * @property string|null $tb_dgRemark 物资信息备注
 * @property string $tb_dgAddress 需求地址
 */
class TbDemandGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_demand_goods}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_dgUser', 'tb_dgType', 'tb_dgAddress'], 'required'],
            [['tb_dgUser', 'tb_dgNum', 'tb_dgPrice'], 'integer'],
            [['tb_dgRemark'], 'string'],
            [['tb_dgType'], 'string', 'max' => 40],
            [['tb_dgAddress'], 'string', 'max' => 127],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_dgId' => '需求编号',
            'tb_dgUser' => '需求发布者',
            'tb_dgType' => '物资类型',
            'tb_dgNum' => '物资数量',
            'tb_dgPrice' => '物资价格',
            'tb_dgRemark' => '物资信息备注',
            'tb_dgAddress' => '需求地址',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbDemandGoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbDemandGoodsQuery(get_called_class());
    }
}
