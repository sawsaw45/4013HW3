<?php
function selectExercises() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select exerciseid, exercisename, description, musclegroup, equipmentrequired from Exercises; ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertExercise($exercisename, $description, $musclegroup, $equipmentrequired) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Exercises` (`ExerciseName`, `Description`, `MuscleGroup`, `EquipmentRequired`) VALUES (?, ?, ?, ?) ");
        $stmt->bind_param("ssss", $exercisename, $description, $musclegroup, $equipmentrequired);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteExercise($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Exercises` WHERE ExerciseID = ?");
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateExercise($exercisename, $description, $musclegroup, $equipmentrequired, $id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Exercises` SET `ExerciseName` = ?, `Description` = ?, `MuscleGroup` = ?, `EquipmentRequired` = ? WHERE `ExerciseID` = ? ");
        $stmt->bind_param("ssssi", $exercisename, $description, $musclegroup, $equipmentrequired, $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>