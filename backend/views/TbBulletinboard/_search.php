<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBulletinboardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-bulletinboard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tb_bId') ?>

    <?= $form->field($model, 'tb_bContent') ?>

    <?= $form->field($model, 'tb_bUserid') ?>

    <?= $form->field($model, 'tb_bPosttime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
