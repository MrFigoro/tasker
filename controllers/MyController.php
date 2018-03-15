<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 25.02.2018
 * Time: 22:33
 */

namespace app\controllers;

class MyController extends AppController
{
	public function actionIndex($id = null){
		//$hi = 'Hello world! Throw \'=>\'';
		//$names = ['Ivanov', 'Petrov', 'Sidorov'];
		$hi2 = 'Hello world! Throw \'compact()\'';
		$names2 = ['Ivanov', 'Petrov', 'Sidorov'];

		if (!$id) $id = "test (по-умолчанию)";
		//return $this->render('index', ['hello' => $hi, 'massive' => $names]);
		return $this->render('index', compact('hi2','names2', 'id'));
	}

	public function actionBlogPost()
	{
		return 'Blog Post'; // my/blog-post
	}
}