<?php

/**
 * Description of Category
 *
 * @author icstime
 */
require_once 'Observable.php';

class Category implements Observable{
    
    private $_name;
    private $_observers;
    
    public function __construct($name) {
        $this->_name = $name;
    }
    
    public function addObserver(\Observer $observer, $type) {
        $this->_observers[$type][] = $observer;
    }
    
    public function deleteObserver($type) {
        if(array_key_exists($type, $this->_observers)){
            $observers = $this->_observers[$type];
            foreach ($observers as $key => $obj) {
                unset($this->_observers[$type][$key]);
                return;
            }
        }
    }

    public function notify($type) {
        if (array_key_exists($type, $this->_observers)){
            $observers = $this->_observers[$type];
            foreach ($observers as $key => $obj) {
                $obj->update($this->_name);
            }
        }
    }

}
