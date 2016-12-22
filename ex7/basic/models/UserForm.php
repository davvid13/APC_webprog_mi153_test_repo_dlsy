<? php

namespace app\model;


use yii\base\Model;

class test enxtends Model 
{
	public $names;
	public $email;
	
	public function rules()
		{
			return [['name','email'],'required'],
					['email','email'],
				];
		}
}