<select class="form-select" id="iid" name="iid">
    <?php
    while ($exerciseItem = $exerciseList->fetch_assoc()) {
        $selText = "";
        if ($selectedExercise == $exerciseItem['exerciseid']) {
            $selText = " selected";
        }
        ?>
        <option value="<?php echo $exerciseItem['exerciseid']; ?>"<?=$selText?>><?php echo $exerciseItem['exercisename']; ?></option>
        <?php
    }
    ?>
</select>