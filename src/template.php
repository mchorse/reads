<?php

/**
 * Simple "template engine" functions
 * 
 * @author mchorse
 */

/** @const string TMP - templates folder */
const TMP = __DIR__ . '/../templates/';

/**
 * @param string $__view__
 * @param array $__data__
 */
function template($__view__, array $__data__ = [])
{
    extract($__data__);
    
    require TMP . $__view__ . '.php';
}

/**
 * Return youtube video code
 * 
 * @param string id
 * @param string domain
 * @return string
 */
function youtube($id, $domain)
{
    $raw_id = substr($id, 0, strpos($id, '?'));
    
    if ($domain === \mchorse\GH)
    {
        return sprintf('<a href="https://youtu.be/%s"><img src="https://img.youtube.com/vi/%s/0.jpg"></a>', $id, $raw_id);
    }
    else if ($domain === \mchorse\CF)
    {
        return sprintf('<iframe width="560" height="315" src="https://www.youtube.com/embed/%s" frameborder="0" allowfullscreen></iframe>', $id);
    }
    
    return '[youtube]' . $id . '[/youtube]';
}

/**
 * @param string $__view__
 * @param array $__data__
 * @return string
 */
function stringify($view, array $data = [])
{
    ob_start();
    template($view, $data);
    
    return ob_get_clean();
}