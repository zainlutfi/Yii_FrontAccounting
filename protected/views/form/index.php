<?php
/* @var $this FormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaction Types',
);

$this->menu=array(
	array('label'=>'Create TransactionType', 'url'=>array('create')),
	array('label'=>'Manage TransactionType', 'url'=>array('admin')),
);
?>

<h1>Transaction Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
