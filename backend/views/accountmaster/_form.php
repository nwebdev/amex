<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accountmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accountmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'accountTypeID')->textInput() ?>

    <?= $form->field($model, 'accountEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accountPasswordHash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accountName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isActive')->textInput() ?>

    <?= $form->field($model, 'createdOn')->textInput() ?>

    <?= $form->field($model, 'lastUpdated')->textInput() ?>

    <?= $form->field($model, 'createdBy')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
