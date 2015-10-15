<?php
namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord{
	public static function tableName(){
		return 'test';
	}

	public function rules(){
		return [
		['name','string','min'=>6,'max'=>30],
		['email','email'],
		['birth_date','date','format' => 'yyyy-MM-dd'],
		['content','safe'],
		[['name','email','content','birth_date'],'required'],
		];

	}
}

