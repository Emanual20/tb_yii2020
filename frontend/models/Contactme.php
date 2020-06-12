<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%contactme}}".
 *
 * @property string $id
 * @property string $name
 * @property string $request_time
 * @property string $content
 */
class Contactme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contactme}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'request_time', 'content'], 'required'],
            [['id'], 'string', 'max' => 20],
            [['name', 'content'], 'string', 'max' => 255],
            [['request_time'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'request_time' => 'Request Time',
            'content' => 'Content',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ContactmeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContactmeQuery(get_called_class());
    }
}
