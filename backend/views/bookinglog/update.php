<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookinglog */

$this->title = 'Update Bookinglog: ' . $model->BookingLogID;
$this->params['breadcrumbs'][] = ['label' => 'Bookinglogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookingLogID, 'url' => ['view', 'id' => $model->BookingLogID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bookinglog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
