<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyEventHandler
 *
 * @author 1
 */
class MyEventHandler {
    //put your code here
    static function handleMissionTranslation($event) {
        $text = implode("/n", array(
            'Language: '. $event-language,
            'Category: '. $event-category,
            'Message: '. $event-message,
        ));
        mail('admin@example.com', 'Отсутствует перевод', $text);
    }
}
