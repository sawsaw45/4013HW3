<?php
function selectExercises() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select exercisename, description, musclegroup, equipmentrequired from Exercises; ");
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