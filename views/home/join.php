<p hidden>views.home.join</p>
<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<h1>Join us</h1>

<div class="">

    <?php $form = ActiveForm::begin([
        'id' => 'join-user-form'
    ]); ?>

    <?= $form->field($user, 'username') ?>
    <?= $form->field($user, 'password')->passwordInput() ?>

    <?= Html::submitButton('Create',
        ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>

</div>