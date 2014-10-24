<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Панель поиска</h1>

<?php
echo CHtml::ajaxLink(
        $text = '← на панель результатов поиска', $url = 'site/searchResult', $ajaxOptions = array(
    'type' => 'POST',
    'success' => 'function(data, textStatus, jqXHR){processAjaxResponce(data, textStatus, jqXHR )}',
        ),
        array(
            'id' => 'toSearchResult'
        )
);
?>
