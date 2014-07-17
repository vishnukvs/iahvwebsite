<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Create',
);


?>

<h1>Contact Us</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>