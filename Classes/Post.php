<?php

/**
 * Description of Post
 *
 * @author igor
 */
require_once 'IPostType.php';

class Post implements IPostType{
    
    private $_title;
    private $_description;

    function __construct($title) {
        $this->_title = $title;
    }

    function getLink() {
        return "<a href='http://Somelink/" . $this->getTitle() . "'>LINK</a>";
    }


    public function getDescription() {
        return $this->_description;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function setDescription($description) {
        $this->_description = $description;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

}
