<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingmaster */

$this->title = 'Create Bookingmaster';
$this->params['breadcrumbs'][] = ['label' => 'Bookingmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookingmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
