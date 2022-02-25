<?php
    // xoa session
    session_start();
    session_destroy();
    header("Location: session.php");
?>