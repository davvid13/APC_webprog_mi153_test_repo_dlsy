<?php

use yii\helpers\Html;
use yii\widgets\ActiveFrom;
?>

<?php $form = ActiveForm::begin(); ?>
<? $form->field($model,'name'); ?>
<? $form->field($model,'email'); ?>

<?= Html::submitButton('Submit',['class' =>'btn btn-sucess']);?>