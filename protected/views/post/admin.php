<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);
?>

<h1>Manage Posts</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
   'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name'=>'title',
            'type'=>'raw',
            'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)',
        ),
        array(
            'name'=>'status',
            'value'=>'Lookup::item("PostStatus", $data->status)',
            'filter' => Lookup::items('PostStatus'),
        ),
        array(
            'name'=>'create_time',
            'type'=>'datetime',
            'filter'=>FALSE,
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
));
?>