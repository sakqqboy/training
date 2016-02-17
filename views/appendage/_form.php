<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Appendage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appendage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo  $form->field($model, 'appen_id')->textInput(['maxlength' => true]) ?>

    <?php echo  $form->field($model, 'appen_name')->textInput(['maxlength' => true]) ?>

    <?php echo  $form->field($model, 'appen_boss')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?php echo  Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
