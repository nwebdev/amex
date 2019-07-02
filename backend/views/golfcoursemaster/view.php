<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Golfcoursemaster */

$this->title = $model->GID;
$this->params['breadcrumbs'][] = ['label' => 'Golfcoursemasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="golfcoursemaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'GID',
            'golfCourseTypeID',
            'AMEXConciergeActive',
            'ISOSActive',
            'AMEXMasterTieUp',
            'startTime',
            'endTime',
            'AMEXConciergeWeekdayRounds',
            'AMEXConciergeWeekendRounds',
            'ISOSWeekdayRounds',
            'ISOSWeekendRounds',
            'learnSessionDuration',
            'learnInclusions',
            'learnWeekdayPrice',
            'learnWeekendPrice',
        ],
    ]) ?>

</div>
