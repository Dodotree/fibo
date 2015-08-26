<?php

    if ( !isset( $_GET['N'] ) ){
        print "'N' is not set!\n";
        exit;
    }

    if ( (int)$_GET['N'] != $_GET['N'] ){
        print "'N' should be an integer!\n";
        exit;
    }

    if ( $_GET['N'] < 1 ){
        print "'N' should be greater than zero!\n";
        exit;
    }

    fibonaccis( (int)$_GET['N'], 1, 1, 1 );
    
    function fibonaccis( $Nn, $n, $a0, $a1 ){
        print $a0."<br>";

        if( $n < $Nn ) {
            fibonaccis( $Nn, $n+1, $a1, $a0 + $a1 );
        }
    }

?>
