<?php

/**
 *
 * @author igor
 */
interface IPostType {
    function getTitle();
    function getDescription();
    function setTitle($title);
    function setDescription($description);
    function getLink();
}
