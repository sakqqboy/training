<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Ordit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'par_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'term')->textInput() ?>

    <?= $form->field($model, 'par_total')->textInput() ?>

    <?= $form->field($model, 'or_total')->textInput() ?>

    <?= $form->field($model, 'or_date')->textInput() ?>

    <?= $form->field($model, 'or_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
