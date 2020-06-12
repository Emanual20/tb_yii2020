<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbGoodsTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Goods Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-goods-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Goods Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_gtId',
            'tb_gtName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
