<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cardtype".
 *
 * @property int $CardTypeID
 * @property string $CardTypeName
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 * @property int $CreatedBy
 */
class Cardtype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cardtype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CardTypeName'], 'required'],
            [['IsActive', 'CreatedBy'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['CardTypeName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardTypeID' => 'Card Type ID',
            'CardTypeName' => 'Card Type Name',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
            'CreatedBy' => 'Created By',
        ];
    }
}
