<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 26.02.2018
 * Time: 10:13
 */

use yii\widgets\ActiveForm;
//use yii\base\Model;
use yii\helpers\Html;
use yii\captcha\Captcha;

echo "<h1>Добавление сотрудника</h1>";
//\app\controllers\debug(Yii::$app);
//debug(Yii::$app);
//debug($model);
//print_r( $model);
?>

<?php if (Yii::$app->session->hasFlash('success')) :?>
	<div class="alert alert-success alert-dismissible " role="alert">
		<?php echo Yii::$app->session->getFlash('success')?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('error') ) :?>
	<div class="alert alert-danger alert-dismissible " role="alert">
		<?php echo Yii::$app->session->getFlash('error')?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
	<?= $form->field($model, 'first_name')->label('Имя') ?>
    <?= $form->field($model, 'last_name')->label('Фамилия') ?>
    <?= $form->field($model, 'middle_name')->label('Отчество') ?>
    <?= $form->field($model, 'id_dolzhnost')->label('Номер должности') ?>
<p>Номер должности можно посмотреть на вкладке "<?= Html::a('Должности', ['/post/dolzhn']) ?>". По-умолчанию выбирается должность "не определен"</p>
    <?= $form->field($model, 'phone_number')->label('Номер телефона') ?>
	<?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'verifyCode')->label('Слабо капчу угадать?')->widget(Captcha::className(), [
	'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-4">{input}</div></div>',
]) ?>
	<?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

