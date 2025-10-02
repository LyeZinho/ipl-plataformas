<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $country_id
 * @property string $name
 * @property string $iso_code
 * @property int|null $population
 * @property string|null $region
 */
class Country extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['population', 'region'], 'default', 'value' => null],
            [['name', 'iso_code'], 'required'],
            [['population'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['iso_code'], 'string', 'max' => 2],
            [['region'], 'string', 'max' => 50],
            [['iso_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'name' => 'Name',
            'iso_code' => 'Iso Code',
            'population' => 'Population',
            'region' => 'Region',
        ];
    }

}
