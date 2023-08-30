<?php


/**
 * 
 * 
 * Require a view
 * @param string $name
 * @param array $data
 */
function view($name, $data = [])
{
    /* extract will take the information in the array and create variables with the name
     of the keys*/
    extract($data);
    return require "app/views/{$name}.view.php";
}

/**
 * 
 * Redirect to a new page
 * 
 * @param string $path
 */

function redirect($path)
{
    header("Location: /{$path}");
}
