<?php

/**
 * Description of Category
 *
 * @author icstime
 */
require_once 'Observable.php';
require_once 'Observer.php';
require_once 'IPostType.php';

class Category implements Observable{
    
    private $_name;
    private $_observers;
    private $_posts;
    
    public function __construct($name) {
        $this->_name = $name;
    }
    
    public function addObserver(\Observer $observer) {
        $this->_observers[$observer->getPermissions()][] = $observer;
    }
    
    public function addPost(IPostType $post) {
        $this->_posts[] = $post;
    }
    
    public function notify($type, IPostType $post) {
        foreach ($this->_posts as $find_post) {
            if ($find_post === $post) {
                if (array_key_exists($type, $this->_observers)) {
                    $observers = $this->_observers[$type];
                    foreach ($observers as $key => $obj) {
                        $obj->update($this->_name, $post);
                    }
                }
            }
        }
    }

}
