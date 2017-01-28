<?php

/**
 *
 * @author icstime
 */
interface Observer {
    function getPermissions();
    function update($name, IPostType $post);
}
