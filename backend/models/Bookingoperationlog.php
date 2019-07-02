<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookingoperationlog".
 *
 * @property int $BookingOperationLogID
 * @property string $Value
 * @property int $IsActive
 * @property string $LastUpdated
 * @property string $CreatedOn
 *
 * @property Bookinglog[] $bookinglogs
 */
class Bookingoperationlog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookingoperationlog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Value'], 'string'],
            [['IsActive'], 'integer'],
            [['LastUpdated', 'CreatedOn'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingOperationLogID' => 'Booking Operation Log ID',
            'Value' => 'Value',
            'IsActive' => 'Is Active',
            'LastUpdated' => 'Last Updated',
            'CreatedOn' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookinglogs()
    {
        return $this->hasMany(Bookinglog::className(), ['BookingOperationLogID' => 'BookingOperationLogID']);
    }
}
