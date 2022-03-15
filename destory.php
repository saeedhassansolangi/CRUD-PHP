<?php

require('./partials/headers.php');

require('./config/db.php');

echo "<div class='main'>";

$stdId = $_GET['stdId'];

$query = "DELETE FROM `students` WHERE studentId = '$stdId'";

if($result = mysqli_query($con, $query)){
    header('location: read.php');
}else {
    echo "<h1>Something went wrong</h1>";
}

require('./partials/footer.php');
echo "</div>"
?>




