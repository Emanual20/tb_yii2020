<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBulletinboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bulletinboards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bulletinboard-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Bulletinboard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tb_bId',
            'tb_bContent',
            'tb_bUserid',
            'tb_bPosttime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
