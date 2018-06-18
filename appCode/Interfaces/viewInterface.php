<?php
/**
 * placeholder this doesnt do anything yet .. i am still thinking how I am going to handle the views
 */

namespace excercise\Interfaces;


interface viewInterface
{
    function display($isCLI, $course, $filename = null);
}