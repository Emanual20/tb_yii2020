<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrders */

$this->title = 'Update Tb Orders: ' . $model->tb_oId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_oId, 'url' => ['view', 'id' => $model->tb_oId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-orders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
