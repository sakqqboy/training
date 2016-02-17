<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Parcel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parcel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'par_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_totalin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_totalout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_seller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cas_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chem_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_date')->textInput() ?>

    <?= $form->field($model, 'par_quot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_inspec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_purch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_invoice')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
