<?php

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

require_once('/home/quentin/Code/wordpress_cv/wordpress/wp-config.php');
require_once('/home/quentin/Code/wordpress_cv/wordpress/wp-includes/wp-db.php');

$output = fopen('php://output', 'w');
fputcsv($output, array('mail'));

$emails = $wpdb->get_col( "SELECT mail FROM form" );
foreach ($emails as $mail) {
    fputcsv($output, array($mail));
}

?>
