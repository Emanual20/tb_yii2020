<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrderStatus */

$this->title = 'Update Tb Order Status: ' . $model->tb_osId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Order Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_osId, 'url' => ['view', 'id' => $model->tb_osId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-order-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
