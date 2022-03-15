<?php
require('./partials/headers.php');

    echo "<div class='main'>";
    echo "<h1> Students </h1>";
    echo "<h4><a href='create.php' id='addNewStd'> + Add New Student</a></h4>";

require('./config/db.php');

$read_record = "SELECT * from students";
if($result = mysqli_query($con, $read_record)){
    if(mysqli_num_rows($result) > 0){
        echo "<h2>Total Students ".mysqli_num_rows($result)."</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Std-Id</th>";
        echo "<th>Std-Name</th>";
        echo "<th>Std-Department</th>";
        echo "<th>Std-University</th>";
        echo "<th>Std-Salary</th>";
        echo "<th>Update</th>";
        echo "<th>Delete</th>";
        echo "</tr>";

      while( $data=  mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>".$data['studentId']."</td>";
          echo "<td>".$data['student_name']."</td>";
          echo "<td>".$data['department']."</td>";
          echo "<td>".$data['university']."</td>";
          echo "<td>".$data['salary']."</td>";
          echo "<td><a href='update.php?stdId=".$data['studentId']."' id='updateBtn'>Update</a></td>";
          echo "<td><a href='destory.php?stdId=".$data['studentId']."' id='deleteBtn'>Delete</a></td>";
          echo "</tr>";

      }
        echo "</table>";

    }
    else{
        echo "No records found";
    }
}
require('./partials/footer.php');

echo "</div>";
?>