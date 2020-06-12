<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbWealGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-weal-goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_wgUser')->textInput() ?>

    <?= $form->field($model, 'tb_wgType')->textInput() ?>

    <?= $form->field($model, 'tb_wgNum')->textInput() ?>

    <?= $form->field($model, 'tb_wgPrice')->textInput() ?>

    <?= $form->field($model, 'tb_wgRemark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tb_wgAddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
