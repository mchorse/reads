<?php

namespace mchorse;

const PMC = 'pmc';
const MCF = 'mcforum';
const CF = 'curse';
const GH = 'github';

use Parsedown;
use Gajus\Dindent\Indenter;

/**
 * Return list of domains
 * 
 * @return array
 */
function domains()
{
    return [PMC, MCF, CF, GH];
}

/**
 * Read and output pages
 * 
 * @param array $pages
 * @return array
 */
function read($pages)
{
    $new = [];
    $links = spyc_load_file('config/links.yaml');
    
    foreach ($pages as $key => $value)
    {
        $project = substr($key, 0, -3);
        
        foreach (domains() as $domain)
        {
            $new["$domain/$key"] = [
                'domain' => $domain,
                'project' => $project,
                'output' => output_php($value['path'], compact('domain', 'links', 'project'))
            ];
        }
    }
    
    return $new;
}

/**
 * Process output of pages
 * 
 * @param array $pages
 * @return array
 */
function process($pages)
{
    $md = new Parsedown();
    $di = new Indenter();
    
    foreach ($pages as $key => $value)
    {
        if ($value['domain'] === CF)
        {
            $output = $md->text($value['output']);
            $output = $di->indent($output);
            
            $pages[$key]['output'] = $output;
        }
        else if ($value['domain'] === GH)
        {
            $output = preg_replace('/^\s+$/m', '', $value['output']);
            
            $pages[$key]['output'] = preg_replace('/\n{2,}/', "\n\n", trim($output));
        }
        else
        {
            $output = $md->text($value['output']);
            
            $find = [
                '<p>', '</p>', '<strong>', '</strong>', '<em>', '</em>', 
                '<code>', '</code>', 
                '<ul>', '</ul>', '<li>', '</li>',
                '&quot;'
            ];
            
            $replace = [
                '', '', '[b]', '[/b]', '[i]', '[/i]', 
                '', '', 
                '[list]', '[/list]', '[*]', '',
                ''
            ];
            
            if ($value['domain'] === MCF)
            {
                $replace[0] = '[p]';
                $replace[1] = '[/p]';
            }
            
            /* Headers are replaced to bold captions */
            $output = preg_replace('/<h\w>/', "\n\n[b]", $output);
            $output = preg_replace('/<\/h\w>/', "[/b]", $output);
            
            /* Images and links require more than just find and replace */
            $output = preg_replace('/<a href="([^\"]+)">([^\<]+)<\/a>/', '[url=$1]$2[/url]', $output);
            $output = preg_replace('/<img src="([^\"]+)" alt="[^\"]+" \/>/', '[img]$1[/img]', $output);
            
            /* Clean up */
            $output = preg_replace('/<\/p>\s+<p>/', "</p>\n\n<p>", $output);
            $output = preg_replace('/\n{2,}/', "\n\n", trim($output));
            
            /* Replace HTML tags with BBcodes */
            $output = str_replace($find, $replace, $output);
            
            $pages[$key]['output'] = trim($output);
        }
    }
    
    return $pages;
}

/**
 * Output PHP template
 * 
 * @param string $__path__
 * @param array $__data__
 * @return string
 */
function output_php($__path__, array $__data__ = [])
{
    ob_start();
    extract($__data__);
    require($__path__);
    
    return ob_get_clean();
}

/**
 * Remap the URL to html extension and URL-friendliness
 * 
 * @param string $key
 * @param array $value
 * @return string
 */
function remap($key, $value)
{
    $domain = $value['domain'];
    $extension = '.md';
    
    if ($domain == CF)
    {
        $extension = '.html';
    }
    
    $key = preg_replace('/\.[\w\d]+$/', $extension, $key);
    # $key = preg_replace('/(?<!index)\.html$/', '/index.html', $key);
    
    return $key;
}