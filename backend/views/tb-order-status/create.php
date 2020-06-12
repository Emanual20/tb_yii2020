<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrderStatus */

$this->title = 'Create Tb Order Status';
$this->params['breadcrumbs'][] = ['label' => 'Tb Order Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-order-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
