<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cardholder".
 *
 * @property int $CardHolderID
 * @property string $Mobile
 * @property string $Name
 * @property int $Handicap
 * @property int $CardTypeID
 * @property int $HolderTypeID
 * @property string $SupplementaryMobile
 * @property string $SupplementaryName
 * @property int $SupplementaryHandicap
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 * @property int $CreatedBy
 *
 * @property Bookingmaster[] $bookingmasters
 * @property Accountmaster $createdBy
 * @property Golferlog[] $golferlogs
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Cardholder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cardholder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Mobile', 'Name', 'CardTypeID', 'HolderTypeID', 'CreatedOn', 'CreatedBy'], 'required'],
            [['Handicap', 'CardTypeID', 'HolderTypeID', 'SupplementaryHandicap', 'IsActive', 'CreatedBy'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['Mobile', 'Name', 'SupplementaryMobile', 'SupplementaryName'], 'string', 'max' => 100],
            [['CreatedBy'], 'exist', 'skipOnError' => true, 'targetClass' => Accountmaster::className(), 'targetAttribute' => ['CreatedBy' => 'accountID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardHolderID' => 'Card Holder ID',
            'Mobile' => 'Mobile',
            'Name' => 'Name',
            'Handicap' => 'Handicap',
            'CardTypeID' => 'Card Type ID',
            'HolderTypeID' => 'Holder Type ID',
            'SupplementaryMobile' => 'Supplementary Mobile',
            'SupplementaryName' => 'Supplementary Name',
            'SupplementaryHandicap' => 'Supplementary Handicap',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
            'CreatedBy' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingmasters()
    {
        return $this->hasMany(Bookingmaster::className(), ['customerID' => 'CardHolderID']);
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
    public function getGolferlogs()
    {
        return $this->hasMany(Golferlog::className(), ['GolferID' => 'CardHolderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['customerID' => 'CardHolderID']);
    }
}
