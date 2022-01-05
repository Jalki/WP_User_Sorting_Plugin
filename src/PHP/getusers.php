<?php

    function()
    {
        $response = wp_remote_get( 'https://api.github.com/users/wordpress' );
        $body     = wp_remote_retrieve_body( $response );
    }
    


?>
