<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'sawyerha_hw3User', 'z7H&@JXhi?FM6emE', 'sawyerha_HW3');

    // Check connection
    if ($conn->connect_error) {
        return false;
    }
    return $conn;
}
?>