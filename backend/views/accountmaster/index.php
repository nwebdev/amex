<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\Accounttype;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AccountmasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accountmasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accountmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Accountmaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'accountID',
            //'accountTypeID',
            [
                'attribute' => 'accountTypeID',
                'filter'=>ArrayHelper::map(Accounttype::find()->asArray()->all(), 'accountTypeID', 'accountTypeName'),
                //'filter'=>['1'=>'text','2'=>'jpg'], 
                //'filter'=>(ArrayHelper::map(Accounttype::find()->all(),'accountTypeID','accountTypeName')), 
                'value' => 'accountType.accountTypeName'
            ],
            'accountEmail:email',
           // 'accountPasswordHash',
            'accountName',
            'isActive',
            //'createdOn',
            //'lastUpdated',
            'createdBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
