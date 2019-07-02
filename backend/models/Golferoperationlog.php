<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golferoperationlog".
 *
 * @property int $GolferOperationLogID
 * @property string $Value
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Golferlog[] $golferlogs
 */
class Golferoperationlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golferoperationlog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Value'], 'string'],
            [['IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolferOperationLogID' => 'Golfer Operation Log ID',
            'Value' => 'Value',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolferlogs()
    {
        return $this->hasMany(Golferlog::className(), ['GolferOperationLogID' => 'GolferOperationLogID']);
    }
}
