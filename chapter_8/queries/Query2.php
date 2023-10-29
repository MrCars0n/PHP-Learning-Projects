<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT jobs.JOB_TITLE, jobs.MIN_SALARY, jobs.MAX_SALARY FROM jobs";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){ 
        echo "<table>";
            echo "<tr>";
                echo "<th>Job Title</th>";
                echo "<th>Minimum Salary</th>";
                echo "<th>Max Salary</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){ // work through array of results
            echo "<tr>";
                echo "<td>" . $row['JOB_TITLE'] . "</td>";
                echo "<td> $" . $row['MIN_SALARY'] . ".00 </td>";
                echo "<td> $" . $row['MAX_SALARY'] . ".00 </td>";
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>