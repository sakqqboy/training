<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Returns */

$this->title = 'Create Returns';
$this->params['breadcrumbs'][] = ['label' => 'Returns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="returns-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
