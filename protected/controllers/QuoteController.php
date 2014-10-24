<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QuoteController
 *
 * @author 1
 */
class QuoteController extends Controller {
    private $quotes = array(
        array('quote1', 'author1'),
        array('quote2', 'author2'),
        array('quote3', 'author3'),
        array('quote4', 'author4'),
        array('quote5', 'author5'),
    );
    
    private function getRandomQuote() {
        return $this->quotes[array_rand($this->quotes, 1)];
    }
    
    function actionIndex(){
        $this->render('index', array(
            'quote'=>$this->getRandomQuote(),
        ));
    }
    
    function actionGetQuote(){
        $this->renderPartial('_quote', array(
            'quote'=>  $this->getRandomQuote(),
        ));
    }
}
