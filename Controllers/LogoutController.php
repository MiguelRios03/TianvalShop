<?php

session_start();

session_destroy();

session_start();
header("Location: ../Views/Index.php");

?>