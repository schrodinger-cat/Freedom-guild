<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">

		<title>Админстрирование - <?php echo CHtml::encode($this->pageTitle); ?></title>

	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="brand" href="#">Админка</a>
	          <div class="nav-collapse collapse">
	            <?php $this->widget('zii.widgets.CMenu',array(
	              		'htmlOptions'=>array('class'=>'nav'),
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>	            
	          </div>
	        </div>
	      </div>
	    </div>

		<div class="container">
			<div class="hero-unit">
		        <h1>Hello, world!</h1>
		        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		    </div>

			<div class="row">
				<div class="span4">...</div>
	  			<div class="span8">
					<?php echo $content; ?>
	  			</div>
			</div>
		</div>
		
	</body>
</html>
