<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Right */

$this->title = 'Update Right: ' . ' ' . $model->right_id;
$this->params['breadcrumbs'][] = ['label' => 'Rights', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->right_id, 'url' => ['view', 'id' => $model->right_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="right-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
