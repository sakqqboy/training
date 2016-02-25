<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parcels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parcel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'par_id',
            'par_name',
            'type_id',
            'par_size',
            'par_unit',
            'par_price',
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => '{view} {update} {delete} {taking} {borrowing} {buying}',
                //'template' => '{view} {update} {delete}',
                'buttons' => [
                    'taking' => function($url, $model) {
                        return Html::a('<br><u>ขอเบิก</u>', ['/request/create', 'parcelId' => $model->par_id, 'type' => '1'], [
                                    'title' => Yii::t('app', 'Change today\'s lists'),]);
                    },
                            'borrowing' => function($url, $model) {
                        return Html::a('<br><u>ขอยืม</u>', ['/request/create', 'parcelId' => $model->par_id, 'type' => '2'], [
                                    'title' => Yii::t('app', 'Change today\'s lists'),]);
                    },
                            'buying' => function($url, $model) {
                        return Html::a('<br><u>จัดซื้อ</u>', ['/request/create', 'parcelId' => $model->par_id, 'type' => '3'], [
                                    'title' => Yii::t('app', 'Change today\'s lists'),]);
                    },
                        ]
                    ],
                ],
            ]);
            ?>
</div>
