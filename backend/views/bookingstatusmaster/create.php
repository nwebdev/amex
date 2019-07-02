<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingstatusmaster */

$this->title = 'Create Bookingstatusmaster';
$this->params['breadcrumbs'][] = ['label' => 'Bookingstatusmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookingstatusmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
