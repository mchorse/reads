<?php

/* Compiling dependencies */
$depends = '';

if (isset($dependencies))
{
    $i = 0;
    $depends = 'Also install following mods: ';
    
    foreach ($dependencies as $dependency)
    {
        $dependency_key = $dependency;

        if (is_array($dependency)) 
        {
            $dependency_key = $dependency[0];

            if (isset($dependency[1])) 
            {
                $dependency_version = $dependency[1];
            }
        }

        $not_last = $i < count($dependencies) - 1;
        
        if (!$not_last && count($dependencies) > 1)
        {
            $depends .= 'and ';
        }
        
        /* Compiling a markdown link */
        $depends .= '[' . $links[$dependency_key]['title'] . '](' . $links[$dependency_key]['curse'] . ')';

        if (isset($dependency_version)) 
        {
            $depends .= " (version **$dependency_version**)";
        }

        $depends .= $not_last ? ', ' : '.';
        
        $i ++;
    }
}

?>
## Install

Install [Minecraft Forge](http://files.minecraftforge.net/), download the latest stable version of jar file for available Minecraft version. <?php echo $depends ?> Put it in minecraft's `mods` folder, and launch the game.

After that, <?php echo $links[$project]['title'] ?> mod should be installed and will appear in Minecraft's mods menu. If <?php echo $links[$project]['title'] ?> didn't appear in the mods menu, then something went wrong.