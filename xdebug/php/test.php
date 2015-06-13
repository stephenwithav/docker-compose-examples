<?php

xdebug_start_trace("testing", 4);

$str = "Xdebug";
function ret_ord( $c )
{
    return ord( $c );
}

foreach ( str_split( $str ) as $char )
{
    echo $char, ": ", ret_ord( $char ), "\n";
}

xdebug_stop_trace();

?>