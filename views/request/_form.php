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
<?php \yii\widgets\Pjax::begin(); ?>
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

    <?php
    //\yii\widgets\Pjax::begin(['id' => 'grid-user-pjax', 'timeout' => 5000])
    ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row form-inline">
        <div class="col-lg-10">
            <?= Html::activeTextInput($model, 'searchText', ['class' => 'form-control', 'placeholder' => 'ค้นหาพัสดุ...']) ?>
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
                            return Html::textInput("number[$data->par_id]"); // $data['name'] for array data, e.g. using SqlDataProvider.
                        },
                    ],
                ],
            ]);
            ?>
            <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('ส่งข้อมูล', ['class' => 'btn btn-success']); ?>
            </div>
            <?php ActiveForm::end(); ?>

            <?php \yii\widgets\Pjax::end(); ?>
</div>
