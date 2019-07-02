<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cardholdertype".
 *
 * @property int $CardHolderTypeID
 * @property string $TypeName
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 */
class Cardholdertype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CardHolderType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TypeName'], 'required'],
            [['IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['TypeName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardHolderTypeID' => 'Card Holder Type ID',
            'TypeName' => 'Type Name',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
