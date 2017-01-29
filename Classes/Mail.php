<?php

/**
 * Description of Mail
 *
 * @author igor
 */
require_once 'IPostType.php';
require_once 'Observer.php';

class Mail {
    
    static function makeSubject($cat_name, IPostType $post_type){
        $subject = 'New ' . get_class($post_type) . ' was added to ' . $cat_name . ' category';
        return $subject;
    }
    
    static function makeMessage(IPostType $post_type, Observer $subscriber){
        switch ($subscriber->getPermissions()) {
            case 'editor':
                $rule = 'Edit it here!';
                break;

            case 'subscriber':
                $rule = 'Read it here!';
                break;
            
            default:
                $rule = '';
                break;
        }
        
        $message = 'Dear ' . $subscriber->getName() . '. <br/>' . 'New ' . get_class($post_type) . ' "' . $post_type->getTitle() . '" was added. ' . $rule . ' ' . $post_type->getLink();
        return $message;
    }
}
