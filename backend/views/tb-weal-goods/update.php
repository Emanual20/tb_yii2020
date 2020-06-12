<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbWealGoods */

$this->title = 'Update Tb Weal Goods: ' . $model->tb_wgId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Weal Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_wgId, 'url' => ['view', 'id' => $model->tb_wgId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-weal-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
