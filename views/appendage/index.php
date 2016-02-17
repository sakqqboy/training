<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appendages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appendage-index">

    <h1><?php echo  Html::encode($this->title) ?></h1>

    <p>
        <?php echo  Html::a('Create Appendage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php echo  GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'appen_id',
            'appen_name',
            'appen_boss',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
