<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\Cardtype;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CardholderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cardholders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardholder-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cardholder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'CardHolderID',
            'Mobile',
            'Name',
            'Handicap',
           // 'CardTypeID',
            [
                'attribute' => 'CardTypeID',
                'filter'=>ArrayHelper::map(Cardtype::find()->asArray()->all(), 'CardTypeID', 'CardTypeName'),
                //'value' => 'accountType.accountTypeName'
                'value' =>'CardTypeID'
            ],
            'HolderTypeID',
            'SupplementaryMobile',
            'SupplementaryName',
            'SupplementaryHandicap',
            //'IsActive',
            [
                'attribute' => 'IsActive',
                'filter'=>[1=>'Ative',0=>'Deleted'],
                //'value' => 'accountType.accountTypeName'
                'value' =>'IsActive'
            ],
            //'CreatedOn',
            //'LastUpdated',
            'CreatedBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
