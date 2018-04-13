<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>-->
    <!--    <?= Html::a('Create Data Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>-->
    <!--</p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nama',
            'NIM',
            'Ttl',
            'IPK',
            'Pilihan_Matkul',
            'Kelas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
