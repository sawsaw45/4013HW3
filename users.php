<?php
require_once("util-db.php");
require_once("model-users.php");
$pageTitle = "Users";
include "view-header.php";
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "add":
            if (insertUser($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['email'],$_POST['dob'], $_POST['gender'], $_POST['height'], $_POST['weight'])) {
                echo "<div class='alert alert-success' role='alert'>User added successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error adding user</div>";
            }
            break;
        case "delete":
            if (deleteUser($_POST['id'])) {
                echo "<div class='alert alert-success' role='alert'>User deleted successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting user</div>";
            }
    }
}
$users = selectUsers();
include "view-users.php";
include "view-footer.php";
?>