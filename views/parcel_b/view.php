<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\ParcelB */

$this->title = $model->par_id;
$this->params['breadcrumbs'][] = ['label' => 'Parcel Bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcel-b-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->par_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->par_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'par_id',
            'par_name',
            'type_id',
            'par_size',
            'par_unit',
            'par_price',
            'par_total',
            'par_seller',
            'color',
            'cas_no',
            'chem_name',
            'par_date',
            'par_qout',
            'par_request',
            'par_inspec',
            'par_purch',
            'par_invoice',
        ],
    ]) ?>

</div>
