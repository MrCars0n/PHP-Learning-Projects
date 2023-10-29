<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_nation");

if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Country Name
$sql = "SELECT * FROM countries WHERE country_id = $country_id";
$region = 2; // Set arbitrary value

if($result = mysqli_query($con, $sql))
{
    global $region;
    $row = mysqli_fetch_array($result);

    // Print country name
    echo "<h3><b>" . $row['name'] . "</b></h3>";

    // Get the region id set to the global variable
    $region = $row['region_id'];
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}

// Population
$sql = "SELECT * FROM country_stats WHERE country_id = $country_id ORDER BY year DESC";

if($result = mysqli_query($con, $sql))
{
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    // Print population
    echo "<p><b>Population:</b> " . number_format($row['population']) . "</p>";
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}

// Region 
$sql = "SELECT * FROM regions WHERE region_id = $region";

if($result = mysqli_query($con, $sql))
{
    $row = mysqli_fetch_array($result);

    // Print region
    echo "<p><b>Region:</b> " . $row['name'] . "</p>";
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}

// Languages Spoken
echo "<p><b>Languages Spoken:</b> ";
$sql = "SELECT * FROM country_languages WHERE country_id = $country_id";

if($result = mysqli_query($con, $sql))
{
    $tempArray = array();
    while($row = mysqli_fetch_array($result))
    {
        // Add all the language ids to an array
        $tempArray[] = $row['language_id'];
    }
    
    // Go through every language ID in the array and print the name
    foreach ($tempArray as $tempItem)
    {
        $sql = "SELECT * FROM languages WHERE language_id = $tempItem";
        if($result = mysqli_query($con, $sql))
        {
            $row = mysqli_fetch_array($result);

            // Get the last element in the array
            $lastItem = end($tempArray);

            // Check if the item is the last one
            if ($tempItem === $lastItem) 
            {
                // If it is, print the name without a comma
                echo $row['language'];
            } else {
                // If it isn't, print the name with a comma
                echo $row['language'] . ", ";
            }
        }
        else
        {
            echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
        }
    }
    echo "</p>";
}
else
{
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);
?>