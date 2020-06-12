<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbWealGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Weal Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-weal-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Weal Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_wgId',
            'tb_wgUser',
            'tb_wgType',
            'tb_wgNum',
            'tb_wgPrice',
            //'tb_wgRemark:ntext',
            //'tb_wgAddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
