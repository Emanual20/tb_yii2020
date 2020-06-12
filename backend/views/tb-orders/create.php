<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrders */

$this->title = 'Create Tb Orders';
$this->params['breadcrumbs'][] = ['label' => 'Tb Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
