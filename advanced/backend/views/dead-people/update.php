<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DeadPeople */

$this->title = 'Update Dead People: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dead Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dead-people-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
