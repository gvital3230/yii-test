<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebSiteController
 *
 * @author 1
 */
class WebSiteController extends CController{
    public function actionIndex() {
        echo 'Main page';
    }
    public function actionPage($alias) {
        echo "Page $alias";
    }
}
