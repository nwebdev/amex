<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accountmaster".
 *
 * @property int $accountID
 * @property int $accountTypeID
 * @property string $accountEmail
 * @property string $accountPasswordHash
 * @property string $accountName
 * @property int $isActive
 * @property string $createdOn
 * @property string $lastUpdated
 * @property int $createdBy
 *
 * @property Accounttype $accountType
 * @property Accountpasswordreset[] $accountpasswordresets
 * @property Bookinglog[] $bookinglogs
 * @property Bookingmaster[] $bookingmasters
 * @property Cardholder[] $cardholders
 * @property Golferlog[] $golferlogs
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Accountmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accountmaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accountTypeID', 'accountEmail', 'accountPasswordHash', 'accountName'], 'required'],
            [['accountTypeID', 'isActive', 'createdBy'], 'integer'],
            [['createdOn', 'lastUpdated'], 'safe'],
            [['accountEmail', 'accountPasswordHash', 'accountName'], 'string', 'max' => 100],
            [['accountTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => Accounttype::className(), 'targetAttribute' => ['accountTypeID' => 'accountTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accountID' => 'Account ID',
            'accountTypeID' => 'Account Type ID',
            'accountEmail' => 'Account Email',
            'accountPasswordHash' => 'Account Password Hash',
            'accountName' => 'Account Name',
            'isActive' => 'Is Active',
            'createdOn' => 'Created On',
            'lastUpdated' => 'Last Updated',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountType()
    {
        return $this->hasOne(Accounttype::className(), ['accountTypeID' => 'accountTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountpasswordresets()
    {
        return $this->hasMany(Accountpasswordreset::className(), ['accountID' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookinglogs()
    {
        return $this->hasMany(Bookinglog::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingmasters()
    {
        return $this->hasMany(Bookingmaster::className(), ['createdBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCardholders()
    {
        return $this->hasMany(Cardholder::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolferlogs()
    {
        return $this->hasMany(Golferlog::className(), ['CreatedBy' => 'accountID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['createdBy' => 'accountID']);
    }
}
