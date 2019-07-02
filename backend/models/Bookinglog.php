<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookinglog".
 *
 * @property int $BookingLogID
 * @property int $BookingID
 * @property int $fourBallID
 * @property int $BookingTypeID
 * @property int $CreatedBy
 * @property int $BookingOperationLogID
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Bookingoperationlog $bookingOperationLog
 * @property Accountmaster $createdBy
 * @property Bookingmaster $booking
 * @property Golfcoursetypemaster $bookingType
 */
class Bookinglog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookinglog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookingID', 'CreatedBy', 'BookingOperationLogID'], 'required'],
            [['BookingID', 'fourBallID', 'BookingTypeID', 'CreatedBy', 'BookingOperationLogID', 'IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
            [['BookingOperationLogID'], 'exist', 'skipOnError' => true, 'targetClass' => Bookingoperationlog::className(), 'targetAttribute' => ['BookingOperationLogID' => 'BookingOperationLogID']],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Accountmaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
            [['BookingID'], 'exist', 'skipOnError' => true, 'targetClass' => Bookingmaster::className(), 'targetAttribute' => ['BookingID' => 'bookingID']],
            [['BookingTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => Golfcoursetypemaster::className(), 'targetAttribute' => ['BookingTypeID' => 'golfCourseTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingLogID' => 'Booking Log ID',
            'BookingID' => 'Booking ID',
            'fourBallID' => 'Four Ball ID',
            'BookingTypeID' => 'Booking Type ID',
            'CreatedBy' => 'Created By',
            'BookingOperationLogID' => 'Booking Operation Log ID',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperationLog()
    {
        return $this->hasOne(Bookingoperationlog::className(), ['BookingOperationLogID' => 'BookingOperationLogID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Accountmaster::className(), ['accountID' => 'CreatedBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(Bookingmaster::className(), ['bookingID' => 'BookingID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingType()
    {
        return $this->hasOne(Golfcoursetypemaster::className(), ['golfCourseTypeID' => 'BookingTypeID']);
    }
}
