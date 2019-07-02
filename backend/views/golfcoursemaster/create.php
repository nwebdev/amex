<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Golfcoursemaster */

$this->title = 'Create Golfcoursemaster';
$this->params['breadcrumbs'][] = ['label' => 'Golfcoursemasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golfcoursemaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
