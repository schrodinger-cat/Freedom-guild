<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

		<title>Админстрирование - <?php echo CHtml::encode($this->pageTitle); ?></title>

	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="brand" href="?r=admin">Админка 0.3a</a>
	          <div class="nav-collapse collapse">
	            <?php $this->widget('zii.widgets.CMenu',array(
	              		'htmlOptions'=>array('class'=>'nav'),
						'items'=>array(
							array('label'=>'Новости', 'url'=>array('/admin/default/view')),
							array('label'=>'Видео', 'url'=>array('/admin/default/view')),
							array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
	          </div>
	        </div>
	      </div>
	    </div>

		<div class="container" style="padding-top: 60px;">
			<div class="row">
				<div class="span4">
					<?php
						echo CHtml::link('<i class="icon-plus icon-white"></i> Добавить новость', 
									array('default/create'), 
									array('class'=>'btn btn-large btn-success mb10')
						);
					?>
						
					<?php							
						$this->widget('zii.widgets.CMenu', array(
							'items'=>$this->menu,
							'htmlOptions'=>array('class'=>'nav nav-tabs nav-stacked'),
						));
					?>

					<?php
						echo CHtml::link('<i class="icon-refresh icon-white"></i> Ебануть апдейтца', 
							array('default/updateroster'), 
							array('class'=>'btn btn-large btn-warning')
						);
					?>
					
				</div>

	  			<div class="span8">
					<?php echo $content; ?>
	  			</div>
			</div>
		</div>

		<script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
		<script src="/js/main.js"></script>
		
	</body>
</html>
