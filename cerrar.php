<?php
session_start();
if ($_SESSION['last_action'] < time() - 30 ) {
 
}

header ("location: login");
?>