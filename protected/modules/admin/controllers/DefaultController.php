<?php

class DefaultController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//admin/main';

	public function init() {

		/*if ($_SERVER['REQUEST_URI'] != "/?r=admin/default/login"){
			if(Yii::app()->user->isGuest == 1){
		    	$this->redirect("?r=admin/default/login");
		    } else {
		    	print 'OK';
		    }
		}*/

		/*if ($_SERVER['REQUEST_URI'] == "/?r=admin/default/login"){
		    if(Yii::app()->user->getState('logged') == 0) {
		        $this->redirect("?r=admin/default/login");
		    } else {
		    	$this->redirect("?r=admin");
		    }
		} else {
			echo Yii::app()->user->getState('logged');
		}*/
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('News');		

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'test'=>'test'
		));

	}

	/**
	 * Добавление новости
	 */
	public function actionCreate() {
		$mes = array();	

		if(isset($_POST['news-add'])) {
			$news = new News;
			
			$news->news_name = $_POST['news-name'];
			$news->date = $_POST['news-date'];
			$news->description = $_POST['news-description'];
			$news->full_text = $_POST['news-text'];
			$news->save();

			$mes['success'] = 1;
		}

		
		$this->render('create', $mes);
	}

	public function actionView() {
		$news = new News;
		$data = array();

		$all_n = $news->findAll();
		$data['news'] = $all_n;

		$this->render('view', array(
			'news'=>$all_n
		));
	}

	public function actionUpdate($id)
	{
		$model = new News();
		$model = $model->findByPk($id);
		
		$data = array();

		$data['model'] = $model;

		if(isset($_POST['news-add']))
		{
			$model->news_name = $_POST['news-name'];
			$model->date = $_POST['news-date'];
			$model->description = $_POST['news-description'];
			$model->full_text = $_POST['news-text'];
			$model->save();
			$data['success'] = 1;
		}

		$this->render('update', $data);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error=Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest) {
				echo $error['message'];
			} else {
				$this->render('error', $error);
			}
		}
	}

	/**
	 * Displays the login page.
	 */
	public function actionLogin()
	{
		$this->layout='login';
		
		$model=Yii::createComponent('LoginForm');
		if (isset($_POST['LoginForm'])) {
			$model->attributes=$_POST['LoginForm'];
			if ($model->validate() && $model->login()) {
				

				$this->redirect(Yii::app()->createUrl($this->module->name));				
			}
		}
		$this->render('//admin/login',array(
			'model'=>$model,
		));
	}

	/**
	 * Logs out the current user and redirects to home page.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout(false);
		$this->redirect(Yii::app()->createUrl($this->module->name));
		session_unregister('admin_session');
	}


	/**
	 * Реализуем обновление ростера, например раз в сутки
	 * Используем http://blizzard.github.io/api-wow-docs/
	 */
	public function actionUpdateRoster() {
		$json = file_get_contents('http://eu.battle.net/api/wow/guild/Howling%20Fjord/Фридом?fields=members');
		$obj = json_decode($json, true);

		$sql = 'TRUNCATE TABLE guild_members';
		$connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $dataReader=$command->query();

		foreach ($obj['members'] as $gi) {
			
			$mgi = new GuildMembers;
			$mgi->name = $gi['character']['name'];
			$mgi->class = $gi['character']['class'];
			$mgi->race = $gi['character']['race'];
			$mgi->gender = $gi['character']['gender'];
			$mgi->level = $gi['character']['level'];
			$mgi->achievementPoints = $gi['character']['achievementPoints'];
			$mgi->thumbnail = $gi['character']['thumbnail'];
			$mgi->specName = $gi['character']['spec']['name'];
			$mgi->specRole = $gi['character']['spec']['role'];
			$mgi->rank = $gi['rank'];
			$mgi->save();
		}

		$this->redirect('?r=admin'); 
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}