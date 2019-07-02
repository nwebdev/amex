<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancellationreason".
 *
 * @property int $cancellationReasonID
 * @property string $reason
 * @property int $isActive
 * @property string $lastUpdated
 * @property string $createdOn
 *
 * @property Bookingmaster[] $bookingmasters
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Cancellationreason extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cancellationreason';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reason'], 'required'],
            [['isActive'], 'integer'],
            [['lastUpdated', 'createdOn'], 'safe'],
            [['reason'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cancellationReasonID' => 'Cancellation Reason ID',
            'reason' => 'Reason',
            'isActive' => 'Is Active',
            'lastUpdated' => 'Last Updated',
            'createdOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingmasters()
    {
        return $this->hasMany(Bookingmaster::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }
}
