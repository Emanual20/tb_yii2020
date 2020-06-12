<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbOrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_oId',
            'tb_oSellId',
            'tb_oBuyId',
            'tb_ostatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
