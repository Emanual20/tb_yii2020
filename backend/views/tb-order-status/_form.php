<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbOrderStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-order-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_osId')->textInput() ?>

    <?= $form->field($model, 'tb_osRemark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
