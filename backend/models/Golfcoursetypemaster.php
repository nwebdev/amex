<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golfcoursetypemaster".
 *
 * @property int $golfCourseTypeID
 * @property string $golfCourseType
 *
 * @property Bookinglog[] $bookinglogs
 * @property Golfcoursemaster[] $golfcoursemasters
 */
class Golfcoursetypemaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseTypeMaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['golfCourseType'], 'required'],
            [['golfCourseType'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golfCourseTypeID' => 'Golf Course Type ID',
            'golfCourseType' => 'Golf Course Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookinglogs()
    {
        return $this->hasMany(Bookinglog::className(), ['BookingTypeID' => 'golfCourseTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfcoursemasters()
    {
        return $this->hasMany(Golfcoursemaster::className(), ['golfCourseTypeID' => 'golfCourseTypeID']);
    }
}
