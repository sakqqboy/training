<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\Year */

$this->title = 'Update Year: ' . ' ' . $model->year;
$this->params['breadcrumbs'][] = ['label' => 'Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->year, 'url' => ['view', 'id' => $model->year]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
