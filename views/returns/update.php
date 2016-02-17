<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Returns */

$this->title = 'Update Returns: ' . ' ' . $model->borrow_id;
$this->params['breadcrumbs'][] = ['label' => 'Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->borrow_id, 'url' => ['view', 'id' => $model->borrow_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="returns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
