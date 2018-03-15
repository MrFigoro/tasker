<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 26.02.2018
 * Time: 9:50
 */

namespace app\controllers;
use yii\web\Controller;


class AppController extends Controller
{
	public function debug($arr)
	{
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}
}

