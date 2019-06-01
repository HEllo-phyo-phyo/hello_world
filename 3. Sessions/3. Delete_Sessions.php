<?php
    session_start();				// to use global $_SESSION's functions
    unset($_SESSION['username']);	// destory specific session 
    session_destroy();				// destory all sessions 
?>
