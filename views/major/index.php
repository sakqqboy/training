<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Majors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="major-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Major', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'maj_id',
            'fac_id',
            'maj_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
