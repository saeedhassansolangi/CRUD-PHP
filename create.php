<?php

require('./partials/headers.php');
require('./config/db.php');

echo '<div class="main">';
?>

    <h1>Add New Student</h1>


<form method="post" action="./create.php">

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="stdName" id="stdName" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Department</label>
        <input type="text" name="stdDept" id="stdDept" class="form-control">
    </div>

    <div class="form-group">
        <label for="">University</label>
        <input type="text" name="StdUni" id="StdUni" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Salary</label>
        <input type="text" name="stdSal" id="stdSal" class="form-control">
    </div>
    <button type="submit">Submit</button>
</form>

<?php

$stdName = $_POST["stdName"];
$stdDept = $_POST["stdDept"];
$StdUni = $_POST["StdUni"];
$stdSal = $_POST["stdSal"];

if(isset($stdName) && isset($stdDept) && isset($StdUni) && isset($stdSal)){

    $query = "INSERT INTO `students` (`student_name`, `department`, `university`, `salary`) VALUES ('$stdName', '$stdDept', '$StdUni', '$stdSal')";

    if($result = mysqli_query($con, $query)){
//        echo '<h2>Data Inserted Successfully</h2>';
        header("Location:read.php");
    }else {
        echo '<h2>Something Went Wrong</h2>';
    }
}

require('./partials/footer.php');

echo "<div>";
?>