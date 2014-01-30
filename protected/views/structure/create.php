<?php
/* @var $this StructureController */
/* @var $model Structure */

$this->breadcrumbs=array(
	'Structures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Structure', 'url'=>array('index')),
	array('label'=>'Manage Structure', 'url'=>array('admin')),
);
?>

<h1>Create Structure</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>