<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pages</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'header' => 'Author',
			'name' => 'user_id',
			'value' => '$data->user->username'
		),
		array(
			'header' => 'Live?',
			'filter' => CHtml::dropDownList('Page[live]', $model->live, array('0' => 'Draft', '1' => 'Live'), array('empty' => '(Select)')),
			'value' => '($data->live == 1) ? "Live" : "Draft"'
		),
		'title',
		array(
			'header' => 'Preview',
			'value' => '$data->getSnippet()'
		),
		'date_updated',
		'date_published',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
