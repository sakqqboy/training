<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Buying */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buying-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_app')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_finish')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'approver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reason_manager')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'for_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_use')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'term')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_reinvoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_rebuy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_comein')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
