<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Major */

$this->title = 'Create Major';
$this->params['breadcrumbs'][] = ['label' => 'Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="major-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
