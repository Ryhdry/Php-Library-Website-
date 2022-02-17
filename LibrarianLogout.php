<?php

session_destroy();
if(session_destroy()) {
    header("Location: Librarian.php");
 }
?>