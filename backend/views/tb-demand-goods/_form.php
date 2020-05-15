<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TbDemandGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-demand-goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_dgUser')->textInput() ?>

    <?= $form->field($model, 'tb_dgType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb_dgNum')->textInput() ?>

    <?= $form->field($model, 'tb_dgPrice')->textInput() ?>

    <?= $form->field($model, 'tb_dgRemark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tb_dgAddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
