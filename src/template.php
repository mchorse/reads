<?php

/**
 * Simple "template engine" functions
 * 
 * @author mchorse
 */

/**
 * @param string $__view__
 * @param array $__data__
 */
function template($__view__, array $__data__ = [])
{
    extract($__data__);
    
    require __DIR__ . '/../templates/' . $__view__ . '.php';
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
    $index = strpos($id, '?');
    $raw_id = $index === false ? $id : substr($id, 0, $index);
    
    if ($domain === \mchorse\GH)
    {
        return sprintf('<a href="https://youtu.be/%s"><img src="https://img.youtube.com/vi/%s/0.jpg"></a>', $id, $raw_id);
    }
    else if ($domain === \mchorse\CF)
    {
        $list = strpos($id, '?list=');

        if ($list !== false)
        {
            $id = str_replace($raw_id, 'videoseries', $id);
        }

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