<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounttype".
 *
 * @property int $accountTypeID
 * @property string $accountTypeName
 *
 * @property Accountmaster[] $accountmasters
 * @property Accountpermission[] $accountpermissions
 */
class Accounttype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounttype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accountTypeName'], 'required'],
            [['accountTypeName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'accountTypeID' => 'Account Type ID',
            'accountTypeName' => 'Account Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountmasters()
    {
        return $this->hasMany(Accountmaster::className(), ['accountTypeID' => 'accountTypeID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountpermissions()
    {
        return $this->hasMany(Accountpermission::className(), ['accountTypeID' => 'accountTypeID']);
    }
}
