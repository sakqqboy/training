<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Ordit */

$this->title = $model->or_id;
$this->params['breadcrumbs'][] = ['label' => 'Ordits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->or_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->or_id], [
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
            'or_id',
            'par_id',
            'year',
            'term',
            'par_total',
            'or_total',
            'or_date',
            'or_remark',
        ],
    ]) ?>

</div>
