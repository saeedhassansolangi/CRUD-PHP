<?php

require('./partials/headers.php');
require('./config/db.php');
echo "<div class='main'>";

$stdId = $_GET['stdId'];

$query = "SELECT * FROM `students` WHERE studentId = '$stdId'";

if($result = mysqli_query($con, $query)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo "<h1>Update Student :  $stdId</h1>";

        echo "<form method='post' action='update.php'>";

        echo "<div class='form-group'>
        <label>Student ID</label>
        <input type='text' value='".$row['studentId']."' name='studentId' readonly id='studentId' class='form-control'>
        </div>";


        echo "<div class='form-group'>
        <label>Student Name</label>
        <input type='text' value='".$row['student_name']."' name='stdName' id='stdName' class='form-control'>
        </div>";

        echo ' <div class="form-group">
        <label for="">Department</label>
        <input type="text" value="'.$row["department"].'" name="stdDept" id="stdDept" class="form-control">
        </div>';

        echo ' <div class="form-group">
        <label for="">University</label>
        <input type="text" value="'.$row["university"].'" name="StdUni" id="StdUni" class="form-control">
        </div>';

        echo '<div class="form-group">
        <label for="">Salary</label>
        <input type="text" value="'.$row["salary"].'" name="stdSal" id="stdSal" class="form-control">
        </div>';

        echo '<button type="submit">Submit</button>';
        echo '</form>';
    }
}else {
    echo "<h1>Something Went Wrong</h1>";
}
?>
<?php

$studentId = $_POST['studentId'];
$stdName =  $_POST['stdName'];
$stdDept =  $_POST['stdDept'];
$stdUni =  $_POST['StdUni'];
$stdSal = $_POST['stdSal'];

if(isset($stdName)  && isset($stdDept) && isset($stdUni) && isset($stdSal)){
    $updateStd = "UPDATE `students` SET `student_name`='$stdName',`department`='$stdDept',`university`='$stdUni',`salary`='$stdSal' WHERE studentId = '$studentId'";
    if($result = mysqli_query($con, $updateStd)){
        header('location: read.php');
    }else {
        echo "<h1>Somthing went wrong while updating</h1>";
    }
}

require('./partials/footer.php');
echo "</div>";
?>
