<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accountmaster */

$this->title = 'Update Accountmaster: ' . $model->accountID;
$this->params['breadcrumbs'][] = ['label' => 'Accountmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->accountID, 'url' => ['view', 'id' => $model->accountID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accountmaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
