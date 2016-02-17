<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Right */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="right-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'right_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
