<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM jobs ORDER BY JOB_ID DESC";

if($result = mysqli_query($con, $sql))
{
    // Write a query to get the number of jobs available in the jobs table. 
    // Display the number of jobs available.
    // Hint: Use mysqli_num_rows() to get the number of rows in a result set.
    echo "Number of jobs available: " . mysqli_num_rows($result);
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>