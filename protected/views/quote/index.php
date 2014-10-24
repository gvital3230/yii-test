<h2>Цитата дня</h2>
<div id="quote-of-the-day">
    <?php 
    $this->renderPartial('_quote', array(
        'quote'=>$quote,
    ));?>
</div>
<?php echo CHtml::ajaxLink('Следующая цитата', 
        array('getQuote'),
        array('update'=>'#quote-of-the-day')
        );
?>
