<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\RequestDetail */

$this->title = $model->requestDetailId;
$this->params['breadcrumbs'][] = ['label' => 'Request Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->requestDetailId], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->requestDetailId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'requestDetailId',
            'requestId',
            'parcelId',
            'parcelName',
            'typeId',
            'parSize',
            'parUnit',
            'parBrand',
            'parModel',
            'parPrice',
            'parTotal',
            'status',
            'subId',
            'numberRequest',
            'numberReinvoice',
            'numberRebuy',
            'numberInvoice',
            'numberComein',
            'requestTypeId',
        ],
    ])
    ?>

</div>
