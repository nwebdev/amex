<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolfcoursemasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golfcoursemasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golfcoursemaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golfcoursemaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GID',
            'golfCourseTypeID',
            'AMEXConciergeActive',
            'ISOSActive',
            'AMEXMasterTieUp',
            //'startTime',
            //'endTime',
            //'AMEXConciergeWeekdayRounds',
            //'AMEXConciergeWeekendRounds',
            //'ISOSWeekdayRounds',
            //'ISOSWeekendRounds',
            //'learnSessionDuration',
            //'learnInclusions',
            //'learnWeekdayPrice',
            //'learnWeekendPrice',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
