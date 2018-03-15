<?php
/**
 * Created by PhpStorm.
 * User: Figoro
 * Date: 01.03.2018
 * Time: 23:55
 */
namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget
{
	public $nameW;

	public function init()
	{
		parent::init();
//		if ( $this->nameW === null) $this->nameW = 'Гость';
		ob_start();
	}

	public function run()
	{
//		return $this->render('my', ['name' => $this->nameW]);
		$content = ob_get_clean();
		$content = mb_strtoupper($content);
		return $this->render('my', compact('content'));
	}
}