<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql1 = "SELECT departments.DEPARTMENT_NAME, departments.DEPARTMENT_ID,departments.MANAGER_ID,
employees.DEPARTMENT_ID, employees.FIRST_NAME, employees.LAST_NAME FROM departments, employees
WHERE departments.DEPARTMENT_ID = employees.DEPARTMENT_ID AND departments.MANAGER_ID = employees.EMPLOYEE_ID";

if($result = mysqli_query($con, $sql1))
{
  if(mysqli_num_rows($result) > 0){ 
    echo "<table>";
        echo "<tr>";
            echo "<th>Department</th>";
            echo "<th>Manager</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)) // work through array of results
    {
        echo "<tr>";
            echo "<td>" . $row['DEPARTMENT_NAME'] . "</td>";
            echo "<td>" . $row['FIRST_NAME'] . " " . $row['LAST_NAME'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }
} 
else
{
    echo "ERROR: Could not connect to execute $sql1. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>