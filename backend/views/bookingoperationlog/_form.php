<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingoperationlog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bookingoperationlog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
