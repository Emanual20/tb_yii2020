<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CkyArticle */

$this->title = 'Create Cky Article';
$this->params['breadcrumbs'][] = ['label' => 'Cky Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cky-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
