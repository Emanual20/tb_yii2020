<?php
/**
*  Team: TB2020, NKU
*  Coding by Yi-ding Sun 1811425, 20200611
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbWealGoods */

$this->title = 'Create Tb Weal Goods';
$this->params['breadcrumbs'][] = ['label' => 'Tb Weal Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-weal-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
