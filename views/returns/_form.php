<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Returns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="returns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'par_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 're_date')->textInput() ?>

    <?= $form->field($model, 're_check')->textInput() ?>

    <?= $form->field($model, 're_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
