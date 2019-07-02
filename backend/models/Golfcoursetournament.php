<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golfcoursetournament".
 *
 * @property int $GCTournamentId
 * @property int $GID
 * @property string $GolfcourseName
 * @property string $GolfcourseCity
 * @property string $TournamentDate
 * @property string $TournamentReason
 * @property int $IsActive
 * @property string $CreatedOn
 * @property string $LastUpdated
 */
class Golfcoursetournament extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfcoursetournament';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'GolfcourseName', 'GolfcourseCity', 'TournamentDate', 'TournamentReason'], 'required'],
            [['GID', 'IsActive'], 'integer'],
            [['TournamentDate', 'CreatedOn', 'LastUpdated'], 'safe'],
            [['GolfcourseName'], 'string', 'max' => 50],
            [['GolfcourseCity'], 'string', 'max' => 45],
            [['TournamentReason'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GCTournamentId' => 'Gc Tournament ID',
            'GID' => 'Gid',
            'GolfcourseName' => 'Golfcourse Name',
            'GolfcourseCity' => 'Golfcourse City',
            'TournamentDate' => 'Tournament Date',
            'TournamentReason' => 'Tournament Reason',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }
}
