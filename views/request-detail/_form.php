<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\RequestDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'requestId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parcelId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parcelName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typeId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parSize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parUnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parBrand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parModel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parTotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberRequest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberReinvoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberRebuy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberInvoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberComein')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requestTypeId')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
