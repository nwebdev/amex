<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookingstatusmaster".
 *
 * @property int $bookingStatusID
 * @property string $bookingStatusValue
 *
 * @property Bookingmaster[] $bookingmasters
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Bookingstatusmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookingstatusmaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookingStatusValue'], 'required'],
            [['bookingStatusValue'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingStatusID' => 'Booking Status ID',
            'bookingStatusValue' => 'Booking Status Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingmasters()
    {
        return $this->hasMany(Bookingmaster::className(), ['bookingStatus' => 'bookingStatusID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['bookingStatus' => 'bookingStatusID']);
    }
}
