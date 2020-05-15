<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TbDemandGoods */

$this->title = 'Create Tb Demand Goods';
$this->params['breadcrumbs'][] = ['label' => 'Tb Demand Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-demand-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
