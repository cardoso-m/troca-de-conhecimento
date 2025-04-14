<?php
session_start();
session_destroy();
header("Location: ../public/signin.php");
exit();