<?php

/**
 * @package BasePlugin
 */

class BasePluginDeactivation
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
