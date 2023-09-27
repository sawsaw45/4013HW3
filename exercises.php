<?php
$pageTitle = "Exercises";
include "view-header.php";
?>
    <div class="container">
        <h1>Exercises</h1>
        <ul>
            <?php
            foreach ($exercises as $exercise) {
                echo "<li>$exercise</li>";
            }
            ?>
        </ul>
    </div>


<?php
include "view-footer.php";
?>
