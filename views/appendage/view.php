<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\science\Appendage */

$this->title = $model->appen_id;
$this->params['breadcrumbs'][] = ['label' => 'Appendages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appendage-view">

    <h1><?php echo  Html::encode($this->title) ?></h1>

    <p>
        <?php echo  Html::a('Update', ['update', 'id' => $model->appen_id], ['class' => 'btn btn-primary']) ?>
        <?php echo  Html::a('Delete', ['delete', 'id' => $model->appen_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo  DetailView::widget([
        'model' => $model,
        'attributes' => [
            'appen_id',
            'appen_name',
            'appen_boss',
        ],
    ]) ?>

</div>
