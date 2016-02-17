<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ordit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'or_id',
            'par_id',
            'year',
            'term',
            'par_total',
            // 'or_total',
            // 'or_date',
            // 'or_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
