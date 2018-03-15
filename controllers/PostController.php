<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 26.02.2018
 * Time: 10:11
 */

namespace app\controllers;
use Yii;
use app\models\Sotrudnik;
use app\models\TestForm;
use app\models\SecondForm;
use app\models\Dolzhnost;
use yii\data\Pagination;


class PostController extends AppController
{
	public $layout = 'basic'; //шаблон будет действовать на все вьюшки из контроллера

	public function actionIndex()
	{

		if (Yii::$app->request->isAjax){
//			debug($_POST);
			debug(Yii::$app->request->post());
			return 'test';
		}

		$model = new TestForm();
		if( $model->load(Yii::$app->request->post()) /*&& $model->validate*/){
//			debug($model);
//			die;
			if ($model->save() ){
				Yii::$app->session->setFlash('success', 'Данные успешно принняты');
				return $this->refresh();
			}
			else {
				Yii::$app->session->setFlash('error', 'Ошибка введенных данных');
			}
		}

		$this->view->title = 'Добавить сотрудника';
		return $this->render('test', compact('model'));
	}

	public function actionShow()// Здесь выводятся сотрудники
	{
//		$this->layout = 'basic';

		$this->view->title = 'Сотрудники';
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
		$this->view->registerMetaTag(['name' => 'description', 'content' => 'Описание страницы']);

		//$cats = Category::find()->all(); //выводим все записи из таблицы
		//$cats = Category::find()->orderBy(['id' => SORT_DESC])->all(); // соритровка по убыванию
		//$cats = Category::find()->asArray()->all(); //выборка из БД как массив $cat['title']
		//$cats = Category::find()->asArray()->where('parent=691')->all();
		//$cats = Category::find()->asArray()->where(['parent' => 691])->all();
		//$cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all(); //Поиск всех полей где запись содержит pp
		//$cats = Category::find()->asArray()->where(['<=', 'id', 695])->all(); //Вывод всех записей с id <= 695
		//$cats = Category::find()->asArray()->where('parent = 691')->limit(1)->all(); //Вывод одной записи в могомерный массив
		//$cats = Category::find()->asArray()->where('parent = 691')->one(); //Вывод одной записи в одномерный массив ИЗБЫТОЧНЫЙ ЗАПРОС
		//$cats = Category::find()->asArray()->where('parent = 691')->limit(1)->one(); //Лучше пользоваться ограничиванием
		//

		//$cats = Category::findOne(['parent' => 691]); //asArray limit не работают с данным методом
		//$cats = Category::findAll(['parent' => 691]);
		//
		//$query = "SELECT * FROM categories WHERE title LIKE '%pp%'"; //если нобходимо создать сложный запрос
//		$cats = Category::findBySql($query)->all();

		//$query = "SELECT * FROM categories WHERE title LIKE :search"; //если нобходимо создать сложный БЕЗОПАСНЫЙ запрос
		//$cats = Category::findBySql($query, [':search' => '%pp%'])->all(); //передача через параметр
		//

		//$cats = Category::findOne(694);
		//$cats = Category::find()->with('products')->where('id=694')->all(); //жадная загрузка данных


		$s = Sotrudnik::find();
		$pagination = new Pagination([
			'defaultPageSize' => 2,
			'totalCount' => $s->count()
		]);
		$col = Sotrudnik::find()->asArray()->count();
		$sotr = Sotrudnik::find()->with('dolzhnost')->asArray()->all();
		//debug($sotr);//отложенная загрузка
		//$cats = Category::find()->with('products')->all(); //жадная загрузка

		return $this->render('show', compact('sotr', 'col', 'pagination'));
	}

	public function actionDolzhn()
	{
		$this->view->title = 'Должности';
		$d = Dolzhnost::find();
		$pagination = new Pagination([
			'defaultPageSize' => 2,
			'totalCount' => $d->count()
		]);
		$dolzh = Dolzhnost::find()->asArray()->orderBy(['id_dolzhnost' => SORT_ASC])->offset($pagination->offset)
			->limit($pagination->limit)->all();
		$dc = Dolzhnost::find()->asArray()->count();
		return $this->render('dolzhn', /*compact('dolzh', 'dc', 'pagination')*/[
			'dolzh' => $dolzh,
			'dc' => $dc,
			'pagination' => $pagination
		]);
	}

	public function actionSecond()
	{
		if (Yii::$app->request->isAjax){
//			debug($_POST);
			debug(Yii::$app->request->post());
			return 'second';
		}

		$p = SecondForm::findOne(17);
		//debug($p);
//		$p->email = '2@2.mail.com'; //Обновление записи таблицы
//		$p->save();

		//$p1 = SecondForm::findOne(16);
		//debug($p1);
		//$p1->delete();

		$model1 = new SecondForm();

		//$model1->name = 'Автор';
		//$model1->email = '111';
		//$model1->text = 'Текст сообщения';
		//$model1->save();

		if( $model1->load(Yii::$app->request->post()) /*&& $model->validate*/){
//			debug($model);
//			die;
			if ($model1->validate() ){
				Yii::$app->session->setFlash('success', 'Данные успешно принняты');
				return $this->refresh();
			}
			else {
				Yii::$app->session->setFlash('error', 'Ошибка введенных данных');
			}
		}

		$this->view->title = 'Все статьи';
		return $this->render('second', compact('model1'));
	}

	public function actionNews()
	{
		return $this->render('news');
	}
}