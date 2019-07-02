<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coachcategorymaster".
 *
 * @property int $coachCategoryID
 * @property string $category
 *
 * @property Golfcoursecoachcategory[] $golfcoursecoachcategories
 * @property Learnbookingmaster[] $learnbookingmasters
 */
class Coachcategorymaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coachcategorymaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'coachCategoryID' => 'Coach Category ID',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfcoursecoachcategories()
    {
        return $this->hasMany(Golfcoursecoachcategory::className(), ['coachCategory' => 'coachCategoryID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnbookingmasters()
    {
        return $this->hasMany(Learnbookingmaster::className(), ['coachCategoryID' => 'coachCategoryID']);
    }
}
