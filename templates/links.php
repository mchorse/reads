<?php 

/**
 * Hello PHP, my friend. 
 * I've come to use you here again, 
 * Because there are so many project pages, 
 * It's really hard to keep them up to date,
 * And all those formats are really tough to write
 * You'll generate
 * My READMEs.
 */

if ($domain !== \mchorse\PMC)
{
    $output = '';
    
    foreach (\mchorse\domains() as $key)
    {
        $title = $links['titles'][$key];
        $link = $links[$project][$key];
        
        $output .= sprintf('[%s](%s) – ', $title, $link);
    }
    
    $title = $links['titles']['adfly'];
    $link = $links[$project]['adfly'];
    
    printf('%s[%s](%s)', $output, $title, $link);
    
    if (isset($links[$project]['wiki']))
    {
        printf(' – [Wiki](%s)', $links[$project]['wiki']);
    }
}