<?php
$adminLink = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/index.php/admin/dashboard/';
$adminLink = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/admin/dashboard/';
header("Location:$adminLink ");
