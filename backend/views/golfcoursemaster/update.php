<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Golfcoursemaster */

$this->title = 'Update Golfcoursemaster: ' . $model->GID;
$this->params['breadcrumbs'][] = ['label' => 'Golfcoursemasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GID, 'url' => ['view', 'id' => $model->GID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golfcoursemaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
