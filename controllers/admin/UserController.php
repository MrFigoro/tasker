<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 26.02.2018
 * Time: 0:01
 */
namespace app\controllers\admin;
use app\controllers\AppController;

class UserController extends AppController
{
	public function actionIndex(){
		return $this->render('index');
	}
}