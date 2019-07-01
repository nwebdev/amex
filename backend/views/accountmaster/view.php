<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accountmaster */

$this->title = $model->accountID;
$this->params['breadcrumbs'][] = ['label' => 'Accountmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accountmaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->accountID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->accountID], [
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
            'accountID',
            'accountTypeID',
            'accountEmail:email',
            'accountPasswordHash',
            'accountName',
            'isActive',
            'createdOn',
            'lastUpdated',
            'createdBy',
        ],
    ]) ?>

</div>
