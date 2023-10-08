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
        $min = NULL;
        $max = 0;
        
        // work through array of results
        while($row = mysqli_fetch_array($result))
        {
            if ($min == NULL)
            {
                $min = $row['SALARY'];
            }
            else if ($row['SALARY'] < $min)
            {
                $min = $row['SALARY'];
            }
            if ($row['SALARY'] > $max)
            {
                $max = $row['SALARY'];
            }
        }

        echo "<br/>Minimum Salary: $" . $min;
        echo "<br/>Maximum Salary: $" . $max;

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