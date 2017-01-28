<?php

/**
 * Description of Subscriber
 *
 * @author icstime
 */
require_once 'Observer.php';

abstract class AbstractSubscriber implements Observer{
    
    private $_name;
    private $_email;
    
    function __construct($name, $email) {
        $this->_name = $name;
        $this->_email = $email;
    }
    
    public function update($cat_name) {
        
    }
    
    function getName(){
        return $this->_name;
    }
    
    function getEmail(){
        return $this->_email;
    }
    
    function setNewEmail($new_email){
        $this->_email = $new_email;
    }

}
