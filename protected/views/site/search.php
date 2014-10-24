<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Панель поиска</h1>

<?php
echo CHtml::ajaxLink(
        $text = '← на главную панель', $url = 'site/index', $ajaxOptions = array(
    'type' => 'POST',
    'success' => 'js:function(data, textStatus, jqXHR){processAjaxResponce(data, textStatus, jqXHR )}',
        ),
        array(
            'id' => 'toMain'
        )
);
?>
