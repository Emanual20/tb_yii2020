<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dxyarea */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dxyarea-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'locationId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'continentName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'continentEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryFullName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinceName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinceEnglishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinceShortName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currentConfirmedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suspectedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curedCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deadCount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updateTime')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
