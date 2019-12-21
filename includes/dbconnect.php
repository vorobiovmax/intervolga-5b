<?php
require_once '../includes/redbean.php';
require_once '../includes/connectionparams.php';

/*
 * Set DB connection using RedBean ORM.
 */

R::setup( 'mysql:host='.$host.';dbname='.$dbname,
        $user, $password );
?>