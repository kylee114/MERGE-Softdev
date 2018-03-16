<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DeadPeople */

$this->title = 'Dead Person # '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dead Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-people-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'user_id' => $model->user_id], [
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
            'id',
            'user_id',
            'submission_id',
            'general_condition',
            'body_part_found',
            'body_condition',
            'apparent_sex',
            'age_group',
            'height',
            'weight',
            'hair_length',
            'hair_color',
            'facial_hair_type',
            'facial_hair_length',
            'facial_hair_color',
            'distinguishing_features',
            'scar_location',
            'tattoo_location',
            'birthmark_location',
            'mole_location',
            'upper_garment',
            'upper_garment_color',
            'lower_garment',
            'lower_garment_color',
            'footwear',
            'eyewear',
            'glasses_color',
            'contact_lens_color',
            'photo',
        ],
    ]) ?>

</div>
