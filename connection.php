<?php
    $g_link = false;
    
    function GetMyConnection()
    {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysqli_connect( $_SERVER['overtherainbow.cmd36kni6cfz.us-west-2.rds.amazonaws.com'], $_SERVER['RainbowOverlord'], $_SERVER['2007)nyxIr1s'], $_SERVER['overtherainbow'], $_SERVER['3306']);
        return $g_link;
    }
    
    function CleanUpDB()
    {
        global $g_link;
        if( $g_link != false )
            mysql_close($g_link);
        $g_link = false;
    }
    
?>