<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM employees ORDER BY FIRST_NAME DESC";

if($result = mysqli_query($con, $sql))
{
    if(mysqli_num_rows($result) > 0)
    { 
        echo "<table>";
            echo "<tr>";
                echo "<th>Employee ID</th>";
                echo "<th>First</th>";
                echo "<th>Last</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Hired</th>";
                echo "<th>Job ID</th>";
                echo "<th>Salary</th>";
                echo "<th>Comm.</th>";
                echo "<th>Man. ID</th>";
                echo "<th>Dept. ID</th>";
            echo "</tr>";
        // work through array of results
        while($row = mysqli_fetch_array($result))
        { 
            echo "<tr>";
                echo "<td>" . $row['EMPLOYEE_ID'] . "</td>";
                echo "<td>" . $row['FIRST_NAME'] . "</td>";
                echo "<td>" . $row['LAST_NAME'] . "</td>";
                echo "<td>" . $row['EMAIL'] . "</td>";
                echo "<td>" . $row['PHONE_NUMBER'] . "</td>";
                echo "<td>" . $row['HIRE_DATE'] . "</td>";
                echo "<td>" . $row['JOB_ID'] . "</td>";
                echo "<td>" . $row['SALARY'] . "</td>";
                echo "<td>" . $row['COMMISSION_PCT'] . "</td>";
                echo "<td>" . $row['MANAGER_ID'] . "</td>";
                echo "<td>" . $row['DEPARTMENT_ID'] . "</td>";
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