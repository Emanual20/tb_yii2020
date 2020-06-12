<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tb_oId') ?>

    <?= $form->field($model, 'tb_oSellId') ?>

    <?= $form->field($model, 'tb_oBuyId') ?>

    <?= $form->field($model, 'tb_ostatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
