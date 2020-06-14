<?php
/**
*  Team: TB2020, NKU
*  Coding by Yi-ding Sun 1811425, 20200611
*/
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbOrderStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Order Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-order-status-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Order Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_osId',
            'tb_osRemark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
