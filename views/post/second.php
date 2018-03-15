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
use mihaildev\ckeditor\CKEditor;

echo "<h1>Test Action</h1>";
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

<?php $form = ActiveForm::begin(['options' => ['id' => 'secondForm']]) ?>
	<?= $form->field($model1, 'name')->label('Имя') ?>
	<?= $form->field($model1, 'email')->input('email') ?>
    <?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
    <?= $form->field($model1, 'text')->widget(CKEditor::className(),[
        'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
        ],
        ]);?>
	<?php //echo $form->field($model1, 'text')->label('Текст сообщения')->textarea(['rows' => 5]) ?>
	<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

