<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbGoodsType */

$this->title = 'Create Tb Goods Type';
$this->params['breadcrumbs'][] = ['label' => 'Tb Goods Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-goods-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
