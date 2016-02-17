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
        $_GET["type"] = 1;
        if ($_GET["type"] == 1) {
            echo "Request ใบขอเบิก";
        } else if ($_GET["type"] == 2) {
            echo "Request ใบขอยืม";
        } else {
            echo "Request ใบขอซื้อ";
        }
        ?>
    </h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">ชื่อ :</div>
                <div class="col-lg-9"></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">วันที่ :</div>
                <div class="col-lg-9"><?= date("d-m-Y"); ?></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">ชื่อ :</div>
                <div class="col-lg-9"></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">วันที่ :</div>
                <div class="col-lg-9"><?= date("d-m-Y"); ?></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">ชื่อ :</div>
                <div class="col-lg-9"></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-3">วันที่ :</div>
                <div class="col-lg-9"><?= date("d-m-Y"); ?></div>
            </div>
        </div>
    </div>

    <h3>รายการพัสดุ</h3>
    <?php
    //\yii\widgets\Pjax::begin(['id' => 'grid-user-pjax', 'timeout' => 5000])
    ?>
    <?php
    $form = ActiveForm::begin([

                'options' => ['data-pjax' => true]]);
    ?>
    <div class="row form-inline">
        <div class="col-lg-12">
            <?= Html::activeTextInput($model, 'searchText', ['class' => 'form-control', 'placeholder' => 'ค้นหาข้อมูล...']) ?>
            <?= Html::a('Search', ['create'], ['class' => 'btn btn-default btn-md']) ?>
        </div>
    </div>
    <?php ActiveForm::end();
    ?>

    <?=
    GridView::widget([
        'id' => 'grid-user',
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
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
                    return Html::textInput("RequestDetail[$data->par_id][number]"); // $data['name'] for array data, e.g. using SqlDataProvider.
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
    <?php //\yii\widgets\Pjax::end() ?>
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



</div>
