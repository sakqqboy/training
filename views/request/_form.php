<?php

namespace app\models\science;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Standard;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\science\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <h2 class="text-center">
        <?php
        if ($_GET["type"] == 1) {
            echo "ใบขอเบิก";
        } else if ($_GET["type"] == 2) {
            echo "ใบขอยืม";
        } else if ($_GET["type"] == 3) {
            echo "ใบขอซื้อ";
        }
        ?>
    </h2>

    <h3>รายการพัสดุ</h3>
    <?php
    //\yii\widgets\Pjax::begin(['id' => 'grid-user-pjax', 'timeout' => 5000])
    ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row form-inline">
        <div class="col-lg-10">
            <?= Html::activeTextInput($model, 'searchText', ['class' => 'form-control', 'placeholder' => 'ค้นหาข้อมูล...']) ?>
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <?php $form = ActiveForm::begin(); ?>
    <?=
    GridView::widget([
        'id' => 'grid-user',
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function($model, $key, $index, $column) {
                    return ['selection', 'value' => $model->par_id];
                }
                    // you may configure additional properties here
                    ],
                    'par_id',
                    'par_name',
                    'type_id',
                    'par_size',
                    'par_total',
                    'par_unit',
                    [
                        'attribute' => 'number',
                        'format' => 'raw',
                        'value' => function ($data) {
                            //return Html::textInput("Item[]");
                            return Html::textInput("number[$data->par_id]"); // $data['name'] for array data, e.g. using SqlDataProvider.
                        },
                    ],
                // 'par_price',
                // 'par_total',
                // 'par_totalin',
                // 'par_totalout',
                // 'par_seller',
                // 'color',
                // 'cas_no',
                // 'chem_name',
                // 'par_date',
                // 'par_quot',
                // 'par_request',
                // 'par_inspec',
                // 'par_purch',
                // 'par_invoice',
                ],
            ]);
            ?>
            <?//= $form->field($model, 'par_total', ['options' => ['class' => 'row form-group',]])->dropDownList(ArrayHelper::map(Parcel::find()->all(), 'par_id', 'par_name'), ['prompt' => '-- จำนวน --', 'class' => 'input-medium']) ?>
            <?//= $form->field($model, 'userId')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'date')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'dateApp')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'dateFinish')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'approver')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'reasonManager')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'forwork')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'dateUse')->textarea(['rows' => 6]) ?>

            <?//= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'term')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'numberReinvoice')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'numberRebuy')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'numberInvoice')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'numberComein')->textInput(['maxlength' => true]) ?>


            <div class="form-group">
                <?= Html::submitButton('ส่งข้อมูล', ['class' => 'btn btn-success']); ?>
            </div>
            <?php ActiveForm::end(); ?>


</div>
