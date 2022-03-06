<?php

require('./partials/headers.php');

require('./config/db.php');

echo "<div class='main'>";

$stdId = $_GET['stdId'];

$query = "DELETE FROM `students` WHERE studentId = '$stdId'";

if($result = mysqli_query($con, $query)){
    echo "<div class='recordResponse'>";
    echo "<h1 class='success'>Record Deleted Successfully</h1>";
    echo '<a href="read.php" class="goback">Go Back</a>';
    echo "</div>";
}else {
    echo "<h1>Something went wrong</h1>";
}

require('./partials/footer.php');
echo "</div>"
?>




