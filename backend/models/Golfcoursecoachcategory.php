<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golfcoursecoachcategory".
 *
 * @property int $golfCourseCoachCategoryID
 * @property int $GID
 * @property int $coachCategory
 *
 * @property Coachcategorymaster $coachCategory0
 * @property Golfcoursemaster $g
 */
class Golfcoursecoachcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golfCourseCoachCategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GID', 'coachCategory'], 'required'],
            [['GID', 'coachCategory'], 'integer'],
            [['coachCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Coachcategorymaster::className(), 'targetAttribute' => ['coachCategory' => 'coachCategoryID']],
            [['GID'], 'exist', 'skipOnError' => true, 'targetClass' => Golfcoursemaster::className(), 'targetAttribute' => ['GID' => 'GID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golfCourseCoachCategoryID' => 'Golf Course Coach Category ID',
            'GID' => 'Gid',
            'coachCategory' => 'Coach Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoachCategory0()
    {
        return $this->hasOne(Coachcategorymaster::className(), ['coachCategoryID' => 'coachCategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(Golfcoursemaster::className(), ['GID' => 'GID']);
    }
}
