<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parcel Bs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcel-b-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parcel B', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'par_id',
            'par_name',
            'type_id',
            'par_size',
            'par_unit',
            // 'par_price',
            // 'par_total',
            // 'par_seller',
            // 'color',
            // 'cas_no',
            // 'chem_name',
            // 'par_date',
            // 'par_qout',
            // 'par_request',
            // 'par_inspec',
            // 'par_purch',
            // 'par_invoice',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
