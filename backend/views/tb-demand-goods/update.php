<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbDemandGoods */

$this->title = 'Update Tb Demand Goods: ' . $model->tb_dgId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Demand Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_dgId, 'url' => ['view', 'id' => $model->tb_dgId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-demand-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
