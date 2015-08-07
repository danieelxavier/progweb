<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja deletar este aluno?',
                'method' => 'post',
            ],
        ]) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
            'matricula',
            'nome',
            'sexo',
            'id_curso',
            'ano_ingresso',
        ],
    ]) ?>

    <p>
        <?php echo "Em nossa base, existem ".$count_ano." alunos de ".$model->ano_ingresso."."?> <br/>
        <?= Html::a('Ver alunos de ' . $model->ano_ingresso, ['turma', 'ano' => $model->ano_ingresso], ['class' => 'btn btn-success']) ?>
    </p>

</div>
