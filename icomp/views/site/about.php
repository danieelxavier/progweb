<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Sobre';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php echo $description ?>
    </p>

    <p>
        <?php echo $date ?>
    </p>

</div>
