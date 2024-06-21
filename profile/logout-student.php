<?php
session_start();
session_destroy();
header('Location: ../login/login-student.php');
exit();
