<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\trivia */

$this->title = 'Update Trivia: ' . $model->trivia_question;
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trivia_question, 'url' => ['view', 'id' => $model->trivia_question]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trivia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
