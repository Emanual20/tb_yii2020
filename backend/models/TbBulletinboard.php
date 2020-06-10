<?php

/**
* Coding by Sakura, 20200609
**/

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_bulletinboard".
 *
 * @property int $tb_bId 公告编号
 * @property string|null $tb_bContent 公告内容
 * @property int|null $tb_bUserid 公告发布者
 * @property string|null $tb_bPosttime 公告发布时间
 */
class TbBulletinboard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_bulletinboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tb_bUserid'], 'integer'],
            [['tb_bPosttime'], 'safe'],
            [['tb_bContent'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tb_bId' => '公告编号',
            'tb_bContent' => '公告内容',
            'tb_bUserid' => '公告发布者',
            'tb_bPosttime' => '公告发布时间',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbBulletinboardQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbBulletinboardQuery(get_called_class());
    }
}
