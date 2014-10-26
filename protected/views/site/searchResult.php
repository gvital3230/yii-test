<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<h1>Панель результатов поиска</h1>

<?php
//echo CHtml::ajaxLink(
//        $text = '← на панель поиска', $url = 'site/search', $ajaxOptions = array(
//    'type' => 'POST',
//    'success' => 'function(data, textStatus, jqXHR){processAjaxResponce(data, textStatus, jqXHR )}',
//        ),
//        array(
//            'id' => 'toSearch',
//            'live' => 'false'
//        )
//);
//?>
<?php
echo CHtml::link('← на панель поиска', 'site/search',array('id'=>'toSearch'));
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
                    'url':'" . $this->createUrl('/site/search') . "',
                    'cache':false,
//                    'data':jQuery(this).parents('form').serialize()
                });
                return false;
            }

            $('#toSearch').click(clickToSearch);
        ");
?>