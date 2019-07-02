<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bookinglog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookinglog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BookingID')->textInput() ?>

    <?= $form->field($model, 'fourBallID')->textInput() ?>

    <?= $form->field($model, 'BookingTypeID')->textInput() ?>

    <?= $form->field($model, 'CreatedBy')->textInput() ?>

    <?= $form->field($model, 'BookingOperationLogID')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
