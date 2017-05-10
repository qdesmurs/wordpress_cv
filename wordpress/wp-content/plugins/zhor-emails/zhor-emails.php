<?php

/*
Plugin Name: Zhor Emails
Plugin URI: http://wordpress.org/plugins/zhor-emails/
Description: The cake is a lie.
Author: Jean Kevin
Version: 420.42
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_menu', 'zhor_emails_menu' );

function zhor_emails_menu() {
    add_menu_page( 'List of Emails', 'Emails', 'manage_options', 'menu-zhor-emails', 'zhor_emails' );
}


function zhor_emails(){
    echo '<h1>Hi m8</h1>';
    echo '<a href="'.get_site_url().'/wp-content/plugins/zhor-emails/save_mails.php">Download Emails</a>';

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Emails</th>';
    echo '</tr>';
    global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM form" );
    foreach ( $result as $print )   {
        echo '<tr>';
        echo '<td>' ;
        echo $print->mail;
        echo '</td>';
        echo '</tr>';
    }
}

?>
