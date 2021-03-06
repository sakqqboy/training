<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Request Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'requestId',
            'parcelId',
            'parcelName',
            // 'parSize',
            'parUnit',
            // 'parBrand',
            // 'parModel',
            // 'parPrice',
            // 'parTotal',
            // 'status',
            // 'subId',
            'numberRequest',
            // 'numberReinvoice',
            // 'numberRebuy',
            // 'numberInvoice',
            // 'numberComein',
            //'requestTypeId',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
