<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DxyareaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '疫情数据展示';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dxyarea-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'locationId',
            //'continentName',
            //'continentEnglishName',
            'countryName',
            //'countryEnglishName',
            //'countryFullName',
            //'provinceName',
            //'provinceEnglishName',
            //'provinceShortName',
            'currentConfirmedCount',
            //'confirmedCount',
            //'suspectedCount',
            'curedCount',
            'deadCount',
            //'comment',
            //'cities',
            //'updateTime',

  //          ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
