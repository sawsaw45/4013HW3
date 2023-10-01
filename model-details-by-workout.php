<?php
function selectWorkoutsByUser($wid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("");

        $stmt->bind_param("i", $wid);
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