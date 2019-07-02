<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingmasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookingmasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookingmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bookingmaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bookingID',
            'GID',
            'dateOfPlay',
            'dateOfBooking',
            'preferredTimeOfPlay',
            //'timeOfPlay1',
            //'timeOfPlay2',
            //'confirmedTimeOfPlay',
            //'numOfGolfers',
            //'customerID',
            //'bookingStatus',
            //'ConfirmDateTime',
            //'isEscalated',
            //'outOfTAT',
            //'cancellationReasonID',
            //'cancellationReason:ntext',
            //'referenceNum',
            //'comment:ntext',
            //'conciergeRemarks:ntext',
            //'isosRemarks:ntext',
            //'golflanRemarks:ntext',
            //'masterRemarks:ntext',
            //'isActive',
            //'createdOn',
            //'lastUpdated',
            //'createdBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
