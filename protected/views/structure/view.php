<?php
/* @var $this StructureController */
/* @var $model Structure */

$this->breadcrumbs=array(
	'Structures'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Structure', 'url'=>array('index')),
	array('label'=>'Create Structure', 'url'=>array('create')),
	array('label'=>'Update Structure', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Structure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Structure', 'url'=>array('admin')),
);
?>

<h1>View Structure #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'date',
		'type',
	),
)); ?>
