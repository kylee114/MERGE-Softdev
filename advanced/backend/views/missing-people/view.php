<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MissingPeople */

$this->title = $model->first_name . " " . $model->last_name . " (Missing)";
$this->params['breadcrumbs'][] = ['label' => 'Missing Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missing-people-view">

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
            'photo',
            'first_name',
            'middle_name',
            'last_name',
            'address',
            'marital_status',
            'sex',
            'birthdate',
            'age',
            'occupation',
            'date_of_disappearance',
            'time_of_disappearance',
            'last_seen',
            'relationship_with_person',
            'height',
            'weight',
            'eye_color',
            'hair_length',
            'hair_color',
            'facial_hair',
            'facial_hair_color',
            'facial_hair_length',
            'ear_shape',
            'eyebrows_size',
            'nose_size',
            'hand_size',
            'feet_size',
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
        ],
    ]) ?>

</div>
