<?php
require_once('./commons/head.php');
if (isset($_SESSION['username'])) {
    header('Location:order/index.php');
} else {
    header('Location:login.php');
}
