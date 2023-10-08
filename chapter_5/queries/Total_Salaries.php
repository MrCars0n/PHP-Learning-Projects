<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql = "SELECT * FROM employees";

if($result = mysqli_query($con, $sql))
{
    if(mysqli_num_rows($result) > 0)
    { 
        $total = 0;
        // work through array of results
        while($row = mysqli_fetch_array($result))
        { 
            $total = $total + $row['SALARY'];
        }
        echo "Total amount to be paid: $" . $total . ".00";

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