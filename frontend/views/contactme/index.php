<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ContactmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '联系我们';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('联系我们', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'request_time',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
