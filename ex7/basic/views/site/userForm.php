<?php

use yii\helpers\Html;
use yii\widgets\ActiveFrom;
?>

<?php $form = ActiveForm::begin(); ?>
<? $form->field($model,'name'); ?>
<? $form->field($model,'email'); ?>