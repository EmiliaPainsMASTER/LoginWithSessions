<?php
require_once('../src/session.php');
$session = new session();
$session->forgetSession();
header('Location: login.php');
exit();