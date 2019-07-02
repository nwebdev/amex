<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingmaster */

$this->title = $model->bookingID;
$this->params['breadcrumbs'][] = ['label' => 'Bookingmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bookingmaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bookingID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bookingID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bookingID',
            'GID',
            "golfcoursemaster.golfCourseType.golfCourseType",
            "golfcoursemaster.golfcoursecoachcategories.CoachCategory0.category",

            "customer.Name",
            "customer.CardTypeID",
            "customer.HolderTypeID",// __
            "customer.bookingmasters",
            "customer.createdBy",
            "customer.CardTypeID",
            "customer.CardTypeID",
            "customer.CardTypeID",

            "createdBy0.",
            "bookingStatus0.",
            "cancellationReason0.",
            "fourballmasters.",
            
            // [ 'format' => 'html', 'label' => 'GID','value'=>function ($data){ 
            //     $d=[];
            //     $d['golfCourseTypeID']= '';
            //     echo"<pre>";
            //     return '<small>'.print_r($data).'</small></pre>';}  
            // ],
            'dateOfPlay',
            'dateOfBooking',
            'preferredTimeOfPlay',
            'timeOfPlay1',
            'timeOfPlay2',
            'confirmedTimeOfPlay',
            'numOfGolfers',
            'customerID',
            'bookingStatus',
            'ConfirmDateTime',
            'isEscalated',
            'outOfTAT',
            'cancellationReasonID',
            'cancellationReason:ntext',
            'referenceNum',
            'comment:ntext',
            'conciergeRemarks:ntext',
            'isosRemarks:ntext',
            'golflanRemarks:ntext',
            'masterRemarks:ntext',
            'isActive',
            'createdOn',
            'lastUpdated',
            'createdBy',
        ],
    ]) ?>

</div>
