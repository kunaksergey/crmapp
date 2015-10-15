<?php
namespace app\utilities;
use yii\base\Module;
class ThirdModule extends Module{
	public $controllerNamespace='app\controllers';
	public function init(){
		parent::init();
		$this->modules=[
			'thirdlevel'=>[
				 'class'=>'app\utilities\ThirdModule',
				 'basePath'=>'@app'
			]
		];


	}
}