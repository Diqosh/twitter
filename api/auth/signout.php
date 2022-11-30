<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/twitter/config/all.php";
session_destroy();
header("Location:" . BASE_URL . '/');