<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php
    $adminAssetsUrl = Yii::app()->request->baseUrl;
    $assetsManager = Yii::app()->clientScript;

    $assetsManager->registerCoreScript('jquery');
    $assetsManager->registerScriptFile($adminAssetsUrl . '/js/cart.js');

    ?>


</head>

<body>
<?php echo $content; ?>
<!--<button id="checkScripts">"Test"</button>-->
</body>
</html>
