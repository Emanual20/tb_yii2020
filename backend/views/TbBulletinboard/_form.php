<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBulletinboard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bulletinboard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tb_bContent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tb_bUserid')->textInput() ?>

    <?= $form->field($model, 'tb_bPosttime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
