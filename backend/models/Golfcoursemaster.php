<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golfcoursemaster".
 *
 * @property int $GID
 * @property int $golfCourseTypeID
 * @property int $AMEXConciergeActive
 * @property int $ISOSActive
 * @property int $AMEXMasterTieUp
 * @property string $startTime
 * @property string $endTime
 * @property int $AMEXConciergeWeekdayRounds
 * @property int $AMEXConciergeWeekendRounds
 * @property int $ISOSWeekdayRounds
 * @property int $ISOSWeekendRounds
 * @property int $learnSessionDuration
 * @property string $learnInclusions
 * @property int $learnWeekdayPrice
 * @property int $learnWeekendPrice
 *
 * @property Bookingmaster[] $bookingmasters
 * @property Golfcoursecoachcategory[] $golfcoursecoachcategories
 * @property Golfcoursetypemaster $golfCourseType
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Golfcoursemaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseMaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['golfCourseTypeID', 'AMEXConciergeActive', 'ISOSActive', 'AMEXMasterTieUp', 'AMEXConciergeWeekdayRounds', 'AMEXConciergeWeekendRounds', 'ISOSWeekdayRounds', 'ISOSWeekendRounds', 'learnSessionDuration', 'learnWeekdayPrice', 'learnWeekendPrice'], 'integer'],
            [['startTime', 'endTime'], 'required'],
            [['startTime', 'endTime'], 'safe'],
            [['learnInclusions'], 'string', 'max' => 200],
            [['golfCourseTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => Golfcoursetypemaster::className(), 'targetAttribute' => ['golfCourseTypeID' => 'golfCourseTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GID' => 'Gid',
            'golfCourseTypeID' => 'Golf Course Type ID',
            'AMEXConciergeActive' => 'Amex Concierge Active',
            'ISOSActive' => 'Isos Active',
            'AMEXMasterTieUp' => 'Amex Master Tie Up',
            'startTime' => 'Start Time',
            'endTime' => 'End Time',
            'AMEXConciergeWeekdayRounds' => 'Amex Concierge Weekday Rounds',
            'AMEXConciergeWeekendRounds' => 'Amex Concierge Weekend Rounds',
            'ISOSWeekdayRounds' => 'Isos Weekday Rounds',
            'ISOSWeekendRounds' => 'Isos Weekend Rounds',
            'learnSessionDuration' => 'Learn Session Duration',
            'learnInclusions' => 'Learn Inclusions',
            'learnWeekdayPrice' => 'Learn Weekday Price',
            'learnWeekendPrice' => 'Learn Weekend Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingmasters()
    {
        return $this->hasMany(Bookingmaster::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfcoursecoachcategories()
    {
        return $this->hasMany(Golfcoursecoachcategory::className(), ['GID' => 'GID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourseType()
    {
        return $this->hasOne(Golfcoursetypemaster::className(), ['golfCourseTypeID' => 'golfCourseTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['GID' => 'GID']);
    }
}
