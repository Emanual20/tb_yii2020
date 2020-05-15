<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TbDemandGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Demand Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-demand-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Demand Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_dgId',
            'tb_dgUser',
            'tb_dgType',
            'tb_dgNum',
            'tb_dgPrice',
            //'tb_dgRemark:ntext',
            //'tb_dgAddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
