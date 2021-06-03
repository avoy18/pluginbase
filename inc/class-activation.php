<?php

/**
 * @package BasePlugin
 */

class BasePluginActivation
{
    public static function activate()
    {
        echo 'test';
        flush_rewrite_rules();
    }
}
