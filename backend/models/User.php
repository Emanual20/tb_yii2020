<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $userphone
 * @property string $userRealName
 * @property int $uAuthority
 * @property string|null $verification_token
 *
 * @property TbDemandGoods[] $tbDemandGoods
 * @property TbWealGoods[] $tbWealGoods
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'userphone', 'userRealName'], 'required'],
            [['status', 'created_at', 'updated_at', 'userphone', 'uAuthority'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['userRealName'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'userphone' => 'Userphone',
            'userRealName' => 'User Real Name',
            'uAuthority' => 'U Authority',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * Gets query for [[TbDemandGoods]].
     *
     * @return \yii\db\ActiveQuery|TbDemandGoodsQuery
     */
    public function getTbDemandGoods()
    {
        return $this->hasMany(TbDemandGoods::className(), ['tb_dgUser' => 'id']);
    }

    /**
     * Gets query for [[TbWealGoods]].
     *
     * @return \yii\db\ActiveQuery|TbWealGoodsQuery
     */
    public function getTbWealGoods()
    {
        return $this->hasMany(TbWealGoods::className(), ['tb_wgUser' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
