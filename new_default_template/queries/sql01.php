<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM employees ORDER BY LAST_NAME";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){ 
        echo "<table>";
            echo "<tr>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>hire_date</th>";
                echo "<th>salary</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){ // work through array of results
            echo "<tr>";
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['LAST_NAME'] . "</td>";
                echo "<td>" . $row['HIRE_DATE'] . "</td>";
                echo "<td>" . $row['SALARY'] . "</td>";
                echo "<td>" . $row['EMAIL'] . "</td>";
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