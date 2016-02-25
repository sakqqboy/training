<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_rank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_appendage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_ser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_datein')->textInput() ?>

    <?= $form->field($model, 'user_dateup')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
