<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingoperationlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookingoperationlogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookingoperationlog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bookingoperationlog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BookingOperationLogID',
            'Value:ntext',
            'IsActive',
            'LastUpdated',
            'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
