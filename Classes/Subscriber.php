<?php

/**
 * Description of Subscriber
 *
 * @author icstime
 */
require_once 'Observer.php';
require_once 'Mail.php';

class Subscriber implements Observer{
    
    private $_name;
    private $_email;
    private $_permissions;
    
    function __construct($name, $email, $_permissions) {
        $this->_name = $name;
        $this->_email = $email;
        $this->_permissions = $_permissions;
    }
    
    public function update($cat_name, IPostType $post) {
        echo 'Email with subject "' .  $this->getSubject($cat_name, $post) . '" was sent to ' . $this->getEmail() . ' with text <br/>' . $this->getMessage($post) . '<br/>';
    }
    
    function getName(){
        return $this->_name;
    }
    
    function getEmail(){
        return $this->_email;
    }
    
    function setPermissions($permissions){
        $this->_permissions = $permissions;
    }
    
    function getPermissions(){
        return $this->_permissions;
    }
    
    function setNewEmail($new_email){
        $this->_email = $new_email;
    }
    
    private function getSubject($cat_name, IPostType $post) {
        return Mail::makeSubject($cat_name, $post);
    }
    
    private function getMessage(IPostType $post) {
        return Mail::makeMessage($post, $this);
    }

}
