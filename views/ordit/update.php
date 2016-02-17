<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Ordit */

$this->title = 'Update Ordit: ' . ' ' . $model->or_id;
$this->params['breadcrumbs'][] = ['label' => 'Ordits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->or_id, 'url' => ['view', 'id' => $model->or_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
