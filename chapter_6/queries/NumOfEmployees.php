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
    // Write a query to get the number of employees working with the company.
    echo "Number of employees working with the company: " . mysqli_num_rows($result);
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>