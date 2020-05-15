<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbDemandGoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-demand-goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'tb_dgId') ?>

    <?= $form->field($model, 'tb_dgUser') ?>

    <?= $form->field($model, 'tb_dgType') ?>

    <?= $form->field($model, 'tb_dgNum') ?>

    <?= $form->field($model, 'tb_dgPrice') ?>

    <?php // echo $form->field($model, 'tb_dgRemark') ?>

    <?php // echo $form->field($model, 'tb_dgAddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
