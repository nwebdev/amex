<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bookingoperationlog */

$this->title = 'Create Bookingoperationlog';
$this->params['breadcrumbs'][] = ['label' => 'Bookingoperationlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bookingoperationlog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
