<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%dxyarea}}".
 *
 * @property string|null $locationId
 * @property string|null $continentName
 * @property string|null $continentEnglishName
 * @property string|null $countryName
 * @property string|null $countryEnglishName
 * @property string|null $countryFullName
 * @property string|null $provinceName
 * @property string|null $provinceEnglishName
 * @property string|null $provinceShortName
 * @property string|null $currentConfirmedCount
 * @property string|null $confirmedCount
 * @property string|null $suspectedCount
 * @property string|null $curedCount
 * @property string|null $deadCount
 * @property string|null $comment
 * @property string|null $cities
 * @property string|null $updateTime
 */
class Dxyarea extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%dxyarea}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['locationId', 'continentName', 'continentEnglishName', 'countryName', 'countryEnglishName', 'countryFullName', 'provinceName', 'provinceEnglishName', 'provinceShortName', 'currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'comment', 'cities', 'updateTime'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'continentName' => 'Continent Name',
            'continentEnglishName' => 'Continent English Name',
            'countryName' => 'Country Name',
            'countryEnglishName' => 'Country English Name',
            'countryFullName' => 'Country Full Name',
            'provinceName' => 'Province Name',
            'provinceEnglishName' => 'Province English Name',
            'provinceShortName' => 'Province Short Name',
            'currentConfirmedCount' => 'Current Confirmed Count',
            'confirmedCount' => 'Confirmed Count',
            'suspectedCount' => 'Suspected Count',
            'curedCount' => 'Cured Count',
            'deadCount' => 'Dead Count',
            'comment' => 'Comment',
            'cities' => 'Cities',
            'updateTime' => 'Update Time',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DxyareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DxyareaQuery(get_called_class());
    }
}
