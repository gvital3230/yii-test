<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Панель поиска</h1>

<?php
//echo CHtml::ajaxLink(
//        $text = '← на панель результатов поиска', $url = 'site/searchResult', $ajaxOptions = array(
//    'type' => 'POST',
//    'success' => 'function(data, textStatus, jqXHR){processAjaxResponce(data, textStatus, jqXHR )}',
//        ),
//        array(
//            'id' => 'toSearchResult',
//        )
//);
//?>
<?php
echo CHtml::link('← на панель поиска', 'site/search',array('id'=>'toSearchResult'));
Yii::app()->clientScript->registerScript('toSearch', "
            var clickToSearch = function() {

                // Вот здесь убиваются лишнии функции clickSendFormAddComment на кнопке отправки, которые
                // могут возникнуть в результате когда код формы был несколько раз загружен через ajax
                $('#content').unbind();

                jQuery.ajax({
                    'success':function(data) {
                        $('#content').empty();
                        $('#content').append(data);
                    },
                    'type':'POST',
                    'url':'" . $this->createUrl('/site/searchresult') . "',
                    'cache':false,
//                    'data':jQuery(this).parents('form').serialize()
                });
                return false;
            }

            $('#toSearchResult').click(clickToSearch);
        ");
?>