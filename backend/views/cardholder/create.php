<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cardholder */

$this->title = 'Create Cardholder';
$this->params['breadcrumbs'][] = ['label' => 'Cardholders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardholder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
