<?php
function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Userid, Username FROM `Users`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>