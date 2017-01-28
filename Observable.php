<?php

/**
 *
 * @author icstime
 */
interface Observable {
    function addObserver(Observer $observer, $type);
    function deleteObserver( $type);
    function notify($type);
}



