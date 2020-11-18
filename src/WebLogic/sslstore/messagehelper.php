<?php

namespace WebLogic\sslstore;

class messagehelper
{
    static function writeinfo($msg)
    {
        echo '<strong>' . $msg . '</strong><br/>';
        echo "\n";
    }

    static function writeerror($msg)
    {
        echo '<strong><span style="color:red">';
        echo '<pre>';
        var_dump($msg);
        echo '</pre>';
        echo '</span></strong><br/>';
        echo "\n";
    }

    static function writevarinfo($msg)
    {
        echo '<pre>';
        var_dump($msg);
        echo "</pre></br>\n";
    }
}