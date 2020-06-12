<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_weal_goods".
 *
 * @property int $tb_wgId 物资编号
 * @property int $tb_wgUser 发布者编号
 * @property int $tb_wgType 物资类型
 * @property int|null $tb_wgNum 物资数量
 * @property int|null $tb_wgPrice 物资价格
 * @property string|null $tb_wgRemark 物资信息备注
 * @property string $tb_wgAddress 需求地址
 *
 * @property TbOrders[] $tbOrders
 * @property User $tbWgUser
 * @property TbGoodsType $tbWgType
 */
class TbWealGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_weal_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_wgUser', 'tb_wgType', 'tb_wgAddress'], 'required'],
            [['tb_wgUser', 'tb_wgType', 'tb_wgNum', 'tb_wgPrice'], 'integer'],
            [['tb_wgRemark'], 'string'],
            [['tb_wgAddress'], 'string', 'max' => 255],
            [['tb_wgUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['tb_wgUser' => 'id']],
            [['tb_wgType'], 'exist', 'skipOnError' => true, 'targetClass' => TbGoodsType::className(), 'targetAttribute' => ['tb_wgType' => 'tb_gtId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_wgId' => '物资编号',
            'tb_wgUser' => '发布者编号',
            'tb_wgType' => '物资类型',
            'tb_wgNum' => '物资数量',
            'tb_wgPrice' => '物资价格',
            'tb_wgRemark' => '物资信息备注',
            'tb_wgAddress' => '需求地址',
        ];
    }

    /**
     * Gets query for [[TbOrders]].
     *
     * @return \yii\db\ActiveQuery|TbOrdersQuery
     */
    public function getTbOrders()
    {
        return $this->hasMany(TbOrders::className(), ['tb_oSellId' => 'tb_wgId']);
    }

    /**
     * Gets query for [[TbWgUser]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getTbWgUser()
    {
        return $this->hasOne(User::className(), ['id' => 'tb_wgUser']);
    }

    /**
     * Gets query for [[TbWgType]].
     *
     * @return \yii\db\ActiveQuery|TbGoodsTypeQuery
     */
    public function getTbWgType()
    {
        return $this->hasOne(TbGoodsType::className(), ['tb_gtId' => 'tb_wgType']);
    }

    /**
     * {@inheritdoc}
     * @return TbWealGoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbWealGoodsQuery(get_called_class());
    }
}
