<?php
require_once("util-db.php");
require_once("model-users.php");
$pageTitle = "Users";
include "view-header.php";
$users = SelectUsers();
include "view-users.php";
include "view-footer.php";
?>