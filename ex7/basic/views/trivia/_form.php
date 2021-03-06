<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\trivia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trivia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trivia_question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trivia_answer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
