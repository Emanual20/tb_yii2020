<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DxyareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dxyarea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'locationId') ?>

    <?= $form->field($model, 'continentName') ?>

    <?= $form->field($model, 'continentEnglishName') ?>

    <?= $form->field($model, 'countryName') ?>

    <?php // echo $form->field($model, 'countryEnglishName') ?>

    <?php // echo $form->field($model, 'countryFullName') ?>

    <?php // echo $form->field($model, 'provinceName') ?>

    <?php // echo $form->field($model, 'provinceEnglishName') ?>

    <?php // echo $form->field($model, 'provinceShortName') ?>

    <?php // echo $form->field($model, 'currentConfirmedCount') ?>

    <?php // echo $form->field($model, 'confirmedCount') ?>

    <?php // echo $form->field($model, 'suspectedCount') ?>

    <?php // echo $form->field($model, 'curedCount') ?>

    <?php // echo $form->field($model, 'deadCount') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'cities') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
