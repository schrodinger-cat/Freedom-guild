<?php
/* @var $this StructureController */
/* @var $model Structure */

$this->breadcrumbs=array(
	'Structures'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Structure', 'url'=>array('index')),
	array('label'=>'Create Structure', 'url'=>array('create')),
	array('label'=>'View Structure', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Structure', 'url'=>array('admin')),
);
?>

<h1>Update Structure <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>