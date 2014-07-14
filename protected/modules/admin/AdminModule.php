<?php

class AdminModule extends CWebModule
{
	private $controller;
	private $_assetsUrl;
	private $_modelsList=array();
	protected $registerModels=array();
	protected $excludeModels=array();
	protected $attributesWidgets;
	public $username;
	public $password;
	public $uploadPath;
	public $uploadUrl;
	public $uploadCreate=false;
	public $redactorUpload=false;
	public $permissions=0774;
	public $analytics=array();

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application			

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

		Yii::app()->setComponents(array(
			'errorHandler'=>array(
				'errorAction'=>$this->name.'/default/error',
			),
			'user'=>array(
				'class'=>'CWebUser',
				'allowAutoLogin'=>false,
				'stateKeyPrefix'=>$this->name,
				'loginUrl'=>Yii::app()->createUrl($this->name.'/default/login'),
			),
		), true);

	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
