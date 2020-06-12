<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbGoodsType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-goods-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_gtId')->textInput() ?>

    <?= $form->field($model, 'tb_gtName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
