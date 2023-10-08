<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM employees ORDER BY FIRST_NAME ASC";


if($result = mysqli_query($con, $sql))
{
    // Write a query to get monthly salary (round 2 decimal places) of each and every employee in the employees table.
    // Store the result in a variable called $result
    while($row = mysqli_fetch_array($result))
    {
        echo $row['FIRST_NAME'] . " " . $row['LAST_NAME'] . "\t" . number_format(round($row['SALARY']/12,2), 2, '.', '' ) . "<br>";
    }
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>