<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Панель результатов поиска</h1>

<?php
echo CHtml::ajaxLink(
        $text = '← на панель поиска', $url = 'site/search', $ajaxOptions = array(
    'type' => 'POST',
    'success' => 'function(data, textStatus, jqXHR){processAjaxResponce(data, textStatus, jqXHR )}',
        ),
        array(
            'id' => 'toSearch'
        )
);
?>
