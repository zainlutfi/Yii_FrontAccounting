<?php
/* @var $this FormController */
/* @var $model TransactionType */

$this->breadcrumbs=array(
	'Transaction Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TransactionType', 'url'=>array('index')),
	array('label'=>'Create TransactionType', 'url'=>array('create')),
	array('label'=>'Update TransactionType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransactionType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransactionType', 'url'=>array('admin')),
);
?>

<h1>View TransactionType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type_no',
		'next_reference',
		'old_abbreviation',
		'old_code',
	),
)); ?>
