<?php
    $g_link = false;
    
    function GetMyConnection()
    {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysql_connect( 'overtherainbow.cmd36kni6cfz.us-west-2.rds.amazonaws.com:3306', 'RainbowOverlord', '2007)nyxIr1s') or die('Could not connect to server.' );
        mysql_select_db('OverTheRainbow', $g_link) or die('Could not select database.');
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