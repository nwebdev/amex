<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BookinglogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookinglog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'BookingLogID') ?>

    <?= $form->field($model, 'BookingID') ?>

    <?= $form->field($model, 'fourBallID') ?>

    <?= $form->field($model, 'BookingTypeID') ?>

    <?= $form->field($model, 'CreatedBy') ?>

    <?php // echo $form->field($model, 'BookingOperationLogID') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
