<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookingmaster".
 *
 * @property int $bookingID
 * @property int $GID
 * @property string $dateOfPlay
 * @property string $dateOfBooking
 * @property string $preferredTimeOfPlay
 * @property string $timeOfPlay1
 * @property string $timeOfPlay2
 * @property string $confirmedTimeOfPlay
 * @property int $numOfGolfers
 * @property int $customerID
 * @property int $bookingStatus
 * @property string $ConfirmDateTime
 * @property int $isEscalated
 * @property int $outOfTAT
 * @property int $cancellationReasonID
 * @property string $cancellationReason
 * @property string $referenceNum
 * @property string $comment
 * @property string $conciergeRemarks
 * @property string $isosRemarks
 * @property string $golflanRemarks
 * @property string $masterRemarks
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property Bookinglog[] $bookinglogs
 * @property Cardholder $customer
 * @property Accountmaster $createdBy0
 * @property Bookingstatusmaster $bookingStatus0
 * @property Cancellationreason $cancellationReason0
 * @property Golfcoursemaster $g
 * @property Fourballmaster[] $fourballmasters
 */
class Bookingmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookingmaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'dateOfPlay', 'dateOfBooking', 'timeOfPlay1', 'timeOfPlay2', 'numOfGolfers', 'customerID', 'createdBy'], 'required'],
            [['GID', 'numOfGolfers', 'customerID', 'bookingStatus', 'isEscalated', 'outOfTAT', 'cancellationReasonID', 'isActive', 'createdBy'], 'integer'],
            [['dateOfPlay', 'dateOfBooking', 'preferredTimeOfPlay', 'ConfirmDateTime', 'createdOn', 'lastUpdated'], 'safe'],
            [['cancellationReason', 'comment', 'conciergeRemarks', 'isosRemarks', 'golflanRemarks', 'masterRemarks'], 'string'],
            [['timeOfPlay1', 'timeOfPlay2', 'confirmedTimeOfPlay'], 'string', 'max' => 20],
            [['referenceNum'], 'string', 'max' => 100],
            [['customerID'], 'exist', 'skipOnError' => true, 'targetClass' => Cardholder::className(), 'targetAttribute' => ['customerID' => 'CardHolderID']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => Accountmaster::className(), 'targetAttribute' => ['createdBy' => 'accountID']],
            [['bookingStatus'], 'exist', 'skipOnError' => true, 'targetClass' => Bookingstatusmaster::className(), 'targetAttribute' => ['bookingStatus' => 'bookingStatusID']],
            [['cancellationReasonID'], 'exist', 'skipOnError' => true, 'targetClass' => Cancellationreason::className(), 'targetAttribute' => ['cancellationReasonID' => 'cancellationReasonID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => Golfcoursemaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingID' => 'Booking ID',
            'GID' => 'Gid',
            'dateOfPlay' => 'Date Of Play',
            'dateOfBooking' => 'Date Of Booking',
            'preferredTimeOfPlay' => 'Preferred Time Of Play',
            'timeOfPlay1' => 'Time Of Play1',
            'timeOfPlay2' => 'Time Of Play2',
            'confirmedTimeOfPlay' => 'Confirmed Time Of Play',
            'numOfGolfers' => 'Num Of Golfers',
            'customerID' => 'Customer ID',
            'bookingStatus' => 'Booking Status',
            'ConfirmDateTime' => 'Confirm Date Time',
            'isEscalated' => 'Is Escalated',
            'outOfTAT' => 'Out Of Tat',
            'cancellationReasonID' => 'Cancellation Reason ID',
            'cancellationReason' => 'Cancellation Reason',
            'referenceNum' => 'Reference Num',
            'comment' => 'Comment',
            'conciergeRemarks' => 'Concierge Remarks',
            'isosRemarks' => 'Isos Remarks',
            'golflanRemarks' => 'Golflan Remarks',
            'masterRemarks' => 'Master Remarks',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookinglogs()
    {
        return $this->hasMany(Bookinglog::className(), ['BookingID' => 'bookingID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Cardholder::className(), ['CardHolderID' => 'customerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Accountmaster::className(), ['accountID' => 'createdBy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus0()
    {
        return $this->hasOne(Bookingstatusmaster::className(), ['bookingStatusID' => 'bookingStatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCancellationReason0()
    {
        return $this->hasOne(Cancellationreason::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfcoursemaster()
    {
        return $this->hasOne(Golfcoursemaster::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFourballmasters()
    {
        return $this->hasMany(Fourballmaster::className(), ['bookingID' => 'bookingID']);
    }
}
