<?php

/**
 *
 * @author icstime
 */
interface Observable {
    function addObserver(Observer $observer);
    function notify($type, IPostType $post);
}



