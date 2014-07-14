<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

		<link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		
		<div class="header container">
			<div class="guild-rank">
				Ранг гильдии:<br>
				рилм - 14<br>
				eu - 459<br>
				мир - 809
			</div>

			<div class="guild-name">
				Freedom-guild<span>EU-Howling Fjord</span>
			</div>
		</div>

		<div class="menu container">
			<?php
				echo CHtml::link('Главная', array('/'));
				echo CHtml::link('О нас', array('/site/page', 'view'=>'about'));
				echo CHtml::link('Видео', array('/site/video'));
				echo CHtml::link('Рекрутинг', array('/site/page', 'view'=>'recruiting'));
				echo CHtml::link('Состав гильдии', array('/site/roster'));
			?>
	    
			<!-- <a href="/">Главная</a>
			<a href="#">О нас</a>
			<a href="#">Видео</a>
			<a href="#">Рекрутинг</a>
			<a href="#">Логи</a>
			<a href="#">Ростер</a>
			<a href="#">Форум</a> -->
		</div>

		<div class="container content">
			<?php echo $content; ?>
		</div>
		

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
	</body>
</html>