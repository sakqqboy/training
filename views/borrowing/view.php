<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Borrowing */

$this->title = $model->borrow_id;
$this->params['breadcrumbs'][] = ['label' => 'Borrowings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowing-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->borrow_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->borrow_id], [
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
            'borrow_id',
            'user_id',
            'date:ntext',
            'date_app:ntext',
            'date_finish:ntext',
            'date_return:ntext',
            'approver',
            'status',
            'reason:ntext',
            'for_work',
            'major',
            'subject',
            'year',
            'term',
            'number',
        ],
    ]) ?>

</div>
