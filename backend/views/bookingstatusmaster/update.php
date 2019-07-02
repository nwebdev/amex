<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingstatusmaster */

$this->title = 'Update Bookingstatusmaster: ' . $model->bookingStatusID;
$this->params['breadcrumbs'][] = ['label' => 'Bookingstatusmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookingStatusID, 'url' => ['view', 'id' => $model->bookingStatusID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bookingstatusmaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
