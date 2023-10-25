<select class="form-select" id="iid" name="iid">
    <?php
    while ($exerciseItem = $exerciseList->fetch_assoc()) {
        $selText = "";
        if ($selectedExercise == $exercisetem['exerciseid']) {
            $selText = " selected";
        }
        ?>
        <option value="<?php echo $exerciseItem['exercise']; ?>"<?=$selText?>><?php echo $exerciseItem['exercisename']; ?></option>
        <?php
    }
    ?>
</select>