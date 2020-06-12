<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbWealGoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-weal-goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tb_wgId') ?>

    <?= $form->field($model, 'tb_wgUser') ?>

    <?= $form->field($model, 'tb_wgType') ?>

    <?= $form->field($model, 'tb_wgNum') ?>

    <?= $form->field($model, 'tb_wgPrice') ?>

    <?php // echo $form->field($model, 'tb_wgRemark') ?>

    <?php // echo $form->field($model, 'tb_wgAddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
