<?php

namespace mchorse;

use crystal\edge\Logger as ILogger;

/**
 * Simple implementation of crystal-edge's Logger
 * 
 * @author mchorse
 */
class Logger implements ILogger
{
    /**
     * String mappings to levels
     */
    public $levels = ["\033[0;37m", "\033[1;33m", "\033[0;31m"];
    
    /**
     * Log to the standard output (or how it's called)
     */
    public function log($level, $string, array $args)
    {
        $level = $this->levels[$level];
        
        $args = array_map(function ($value) use ($level)
        {
            return "\033[0;33m\"$value\"$level";
        }, $args);
        
        array_unshift($args, $string);
        
        $result = call_user_func_array('sprintf', $args);
        
        echo("- $level$result\033[0m\n");
    }
}