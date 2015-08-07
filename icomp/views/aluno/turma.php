<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $ano;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $alunos,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'matricula',
            'nome',
         //   'sexo',
            'id_curso',
            'ano_ingresso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>
