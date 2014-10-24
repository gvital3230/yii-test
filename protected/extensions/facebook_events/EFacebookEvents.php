<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EFacebookEvents
 *
 * @author 1
 */
class EFacebookEvents extends CWidget {
    public $keyword;
    private $loadingImageUrl;
    protected $url = "https://graph.facebook.com/search?q=%s&type=event&callback=?";
    
    protected function getUrl() {
        return sprintf($this->url, urlencode($this->keyword));
    }
    
    public function init() {
        $assetsDir = dirname(__FILE__) .'/assets';
        $cs = Yii::app()->getClientScript();
        $cs->registerCoreScript('jquery');
        $jsDir = $assetsDir . '/facebook_events.js';
        $cs->registerScriptFile(Yii::app()->assetManager->publish($jsDir),  CClientScript::POS_END);
        $cs->registerCssFile(Yii::app()->assetManager->publish($assetsDir . '/facebook_events.css'));
        $this->loadingImageUrl = Yii::app()->assetManager->publish($assetsDir . '/ajax-loader.gif');
    }
    
    public function run() {
        $this->render("body", array(
           'url'=>  $this->getUrl(),
            'loadingImageUrl' => $this->loadingImageUrl,
            'keyword' => $this->keyword,
        ));
    }
}
