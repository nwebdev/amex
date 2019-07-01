<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cardholder */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Cardholders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cardholder-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CardHolderID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CardHolderID], [
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
            'CardHolderID',
            'Mobile',
            'Name',
            'Handicap',
            'CardTypeID',
            'HolderTypeID',
            'SupplementaryMobile',
            'SupplementaryName',
            'SupplementaryHandicap',
            'IsActive',
            'CreatedOn',
            'LastUpdated',
            'CreatedBy',
        ],
    ]) ?>

</div>
