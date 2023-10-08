<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM employees ORDER BY SALARY ASC";

if($result = mysqli_query($con, $sql))
{
    if(mysqli_num_rows($result) > 0)
    { 
        echo "<table>";
            echo "<tr>";
                echo "<th>Employee ID</th>";
                echo "<th>First</th>";
                echo "<th>Last</th>";
                echo "<th>Salary</th>";
            echo "</tr>";
        // work through array of results
        while($row = mysqli_fetch_array($result))
        { 
            echo "<tr>";
                echo "<td>" . $row['EMPLOYEE_ID'] . "</td>";
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['LAST_NAME'] . "</td>";
                echo "<td>" . $row['SALARY'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } 
    else
    {
        echo "No records matching your query were found.";
    }
} 
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>