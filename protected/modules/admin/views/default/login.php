<?php
/* @var $this DefaultController */
/* @var $model LoginForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::t('YcmModule.ycm','Login');
$this->breadcrumbs=array(
	Yii::t('YcmModule.ycm','Login'),
);
?>

<div class="container-fluid">
	<form class="well form-inline" id="verticalForm" action="/index.php?r=admin/default/login" method="post">
		<p>Please enter your username and password.</p>
		<div class="input-prepend">
			<span class="add-on"><i class="icon-user"/></span>
			<input class="input-medium" placeholder="Username" name="LoginForm[username]" id="LoginForm_username" type="text"/>
		</div>
		<div class="input-prepend">
			<span class="add-on"><i class="icon-lock"/></span>
			<input class="input-medium" placeholder="Password" name="LoginForm[password]" id="LoginForm_password" type="password"/>
		</div>
		
		<button class="btn" type="submit" name="yt0">Login</button>
		<br/>
		<label class="checkbox" for="LoginForm_rememberMe">
			<input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]"/>
			<input name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1" type="checkbox"/>
			Remember me next time
		</label>
	</form>
</div>