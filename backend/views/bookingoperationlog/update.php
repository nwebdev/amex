<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingoperationlog */

$this->title = 'Update Bookingoperationlog: ' . $model->BookingOperationLogID;
$this->params['breadcrumbs'][] = ['label' => 'Bookingoperationlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookingOperationLogID, 'url' => ['view', 'id' => $model->BookingOperationLogID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bookingoperationlog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
