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
        if (isset($links[$project][$key]))
        {
            $title = $links['titles'][$key];
            $link = $links[$project][$key];
            
            $output .= sprintf('[%s](%s) – ', $title, $link);
        }
    }
    
    $output = trim($output, '– ');
    
    echo $output;
    
    if (isset($links[$project]['wiki']))
    {
        printf(' – [Wiki](%s)', $links[$project]['wiki']);
    }
}