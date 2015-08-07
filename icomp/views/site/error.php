<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ops. O ocorreu um erro enquanto o servidor Web estava processando seu pedido.
    </p>
    <p>
        Por favor nos contate se você acha que é um problema no servidor. Obrigado.
    </p>

</div>
