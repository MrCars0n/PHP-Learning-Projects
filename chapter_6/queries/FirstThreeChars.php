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
    // Write a query get all first name from employees table in upper case. 
    while($row = mysqli_fetch_array($result))
    {
        echo strtoupper(substr($row['FIRST_NAME'], 0, 3)) . "<br>";
    }
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>