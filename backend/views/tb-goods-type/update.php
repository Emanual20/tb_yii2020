<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbGoodsType */

$this->title = 'Update Tb Goods Type: ' . $model->tb_gtId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Goods Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_gtId, 'url' => ['view', 'id' => $model->tb_gtId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-goods-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
