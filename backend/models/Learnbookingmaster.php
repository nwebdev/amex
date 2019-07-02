<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "learnbookingmaster".
 *
 * @property int $learnBookingID
 * @property int $GID
 * @property int $coachCategoryID
 * @property string $sessionDate
 * @property string $dateOfBooking
 * @property string $sessionTime1
 * @property string $sessionTime2
 * @property string $confirmedSessionTime
 * @property int $customerID
 * @property int $bookingStatus
 * @property string $ConfirmDateTime
 * @property int $isEscalated
 * @property int $outOfTAT
 * @property int $cancellationReasonID
 * @property string $referenceNum
 * @property string $comment
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property Cardholder $customer
 * @property Accountmaster $createdBy0
 * @property Bookingstatusmaster $bookingStatus0
 * @property Cancellationreason $cancellationReason
 * @property Coachcategorymaster $coachCategory
 * @property Golfcoursemaster $g
 */
class Learnbookingmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'learnbookingmaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'coachCategoryID', 'sessionDate', 'dateOfBooking', 'sessionTime1', 'sessionTime2', 'customerID', 'createdBy'], 'required'],
            [['GID', 'coachCategoryID', 'customerID', 'bookingStatus', 'isEscalated', 'outOfTAT', 'cancellationReasonID', 'isActive', 'createdBy'], 'integer'],
            [['sessionDate', 'dateOfBooking', 'ConfirmDateTime', 'createdOn', 'lastUpdated'], 'safe'],
            [['comment'], 'string'],
            [['sessionTime1', 'sessionTime2', 'confirmedSessionTime'], 'string', 'max' => 20],
            [['referenceNum'], 'string', 'max' => 100],
            [['customerID'], 'exist', 'skipOnError' => true, 'targetClass' => Cardholder::className(), 'targetAttribute' => ['customerID' => 'CardHolderID']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => Accountmaster::className(), 'targetAttribute' => ['createdBy' => 'accountID']],
            [['bookingStatus'], 'exist', 'skipOnError' => true, 'targetClass' => Bookingstatusmaster::className(), 'targetAttribute' => ['bookingStatus' => 'bookingStatusID']],
            [['cancellationReasonID'], 'exist', 'skipOnError' => true, 'targetClass' => Cancellationreason::className(), 'targetAttribute' => ['cancellationReasonID' => 'cancellationReasonID']],
            [['coachCategoryID'], 'exist', 'skipOnError' => true, 'targetClass' => Coachcategorymaster::className(), 'targetAttribute' => ['coachCategoryID' => 'coachCategoryID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => Golfcoursemaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'learnBookingID' => 'Learn Booking ID',
            'GID' => 'Gid',
            'coachCategoryID' => 'Coach Category ID',
            'sessionDate' => 'Session Date',
            'dateOfBooking' => 'Date Of Booking',
            'sessionTime1' => 'Session Time1',
            'sessionTime2' => 'Session Time2',
            'confirmedSessionTime' => 'Confirmed Session Time',
            'customerID' => 'Customer ID',
            'bookingStatus' => 'Booking Status',
            'ConfirmDateTime' => 'Confirm Date Time',
            'isEscalated' => 'Is Escalated',
            'outOfTAT' => 'Out Of Tat',
            'cancellationReasonID' => 'Cancellation Reason ID',
            'referenceNum' => 'Reference Num',
            'comment' => 'Comment',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
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
    public function getCancellationReason()
    {
        return $this->hasOne(Cancellationreason::className(), ['cancellationReasonID' => 'cancellationReasonID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoachCategory()
    {
        return $this->hasOne(Coachcategorymaster::className(), ['coachCategoryID' => 'coachCategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(Golfcoursemaster::className(), ['GID' => 'GID']);
    }
}
