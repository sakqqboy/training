<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Borrowing */

$this->title = 'Update Borrowing: ' . ' ' . $model->borrow_id;
$this->params['breadcrumbs'][] = ['label' => 'Borrowings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->borrow_id, 'url' => ['view', 'id' => $model->borrow_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="borrowing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
