<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_oSellId')->textInput() ?>

    <?= $form->field($model, 'tb_oBuyId')->textInput() ?>

    <?= $form->field($model, 'tb_ostatus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
