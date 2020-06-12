<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ContactmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactmes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('申请留言反馈', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?php Pjax::end(); ?>

</div>
