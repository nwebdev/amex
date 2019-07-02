<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golferlog".
 *
 * @property int $GolferLogID
 * @property int $GolferID
 * @property int $CreatedBy
 * @property int $GolferOperationLogID
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Cardholder $golfer
 * @property Golferoperationlog $golferOperationLog
 * @property Accountmaster $createdBy
 */
class Golferlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golferlog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GolferID', 'CreatedBy', 'GolferOperationLogID'], 'required'],
            [['GolferID', 'CreatedBy', 'GolferOperationLogID', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['GolferID'], 'exist', 'skipOnError' => true, 'targetClass' => Cardholder::className(), 'targetAttribute' => ['GolferID' => 'CardHolderID']],
            [['GolferOperationLogID'], 'exist', 'skipOnError' => true, 'targetClass' => Golferoperationlog::className(), 'targetAttribute' => ['GolferOperationLogID' => 'GolferOperationLogID']],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Accountmaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolferLogID' => 'Golfer Log ID',
            'GolferID' => 'Golfer ID',
            'CreatedBy' => 'Created By',
            'GolferOperationLogID' => 'Golfer Operation Log ID',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfer()
    {
        return $this->hasOne(Cardholder::className(), ['CardHolderID' => 'GolferID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolferOperationLog()
    {
        return $this->hasOne(Golferoperationlog::className(), ['GolferOperationLogID' => 'GolferOperationLogID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Accountmaster::className(), ['accountID' => 'CreatedBy']);
    }
}
