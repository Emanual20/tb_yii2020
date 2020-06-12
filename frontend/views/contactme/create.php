<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contactme */

$this->title = '联系我们';
$this->params['breadcrumbs'][] = ['label' => 'Contactmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
