<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookinglogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookinglogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookinglog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bookinglog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BookingLogID',
            'BookingID',
            'fourBallID',
            'BookingTypeID',
            'CreatedBy',
            //'BookingOperationLogID',
            //'IsActive',
            //'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
