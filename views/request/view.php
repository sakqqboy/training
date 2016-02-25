<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\science\Request */

//$this->title = $model->requestId;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-view">
    <?php
    if ($model->requestTypeId == 1) {
        $type = "ขอเบิก";
    } else if ($model->requestTypeId == 2) {
        $type = "ขอยืม";
    } else {
        $type = "ขอจัดซื้อ";
    }
    ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row form-inline">
        <div class="col-lg-6">
            <font size="4"><b>เลขที่ : </b></font><font size="4"><?php echo $model->requestId; ?></font>
        </div>
        <div class="col-lg-6">
            <font size="4"><b>ประเภทรายการ : </b></font><font size="4"><?Php echo $type; ?></font>
        </div>
    </div>
    <div class="row form-inline">
        <div class="col-lg-6">
            <font size="4"><b>ผู้ทำรายการ : </b></font><font size="4"><?php echo $model->userId; ?></font>
        </div>
        <div class="col-lg-6">
            <font size="4"><b>วันที่ทำรายการ : </b></font><font size="4"><?Php echo $model->date; ?></font>
        </div>
    </div>
    <div class="row form-inline">
        <div class="col-lg-10">
            <font size="4"><b>เหตุผลที่<?php echo $type . ' : </b></font><font size="4">' . $model->reason; ?></font>
        </div>
    </div>
    <?php if ($userType == '0002') { ?>
        <?php $form = ActiveForm::begin(); ?>
        <p>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'requestId',
                    'parcelId',
                    'parcelName',
                    'parSize',
                    'numberRequest',
                    'parUnit',
                    [
                        'class' => 'yii\grid\CheckboxColumn',
                        'checkboxOptions' => function($model, $key, $index, $column) {
                            return ['selection', 'value' => $model->parcelId];
                        }
                            ],
                        // ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>
                    <?= Html::submitButton('อนุมัติ', ['class' => 'btn btn-success']); ?>
                </p>
                <?php ActiveForm::end(); ?>
            <?php } else { ?>

                <?php $form = ActiveForm::begin(); ?>
                <p>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            //'requestId',
                            'parcelId',
                            'parcelName',
                            'parSize',
                            'numberRequest',
                            'parUnit',
                        ],
                    ]);
                    ?>
                </p>
                <?php ActiveForm::end(); ?>
            <?php } ?>

</div>
