<?php
// Connect to Server and Database
$con = mysqli_connect("localhost","jwestfal_student","student#2023","jwestfal_office");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
$sql1 = "SELECT regions.REGION_ID, regions.REGION_NAME,
countries.COUNTRY_ID, countries.REGION_ID,
countries.COUNTRY_NAME, locations.COUNTRY_ID,
locations.STREET_ADDRESS, locations.CITY,
locations.POSTAL_CODE
FROM regions, countries, locations
WHERE regions.REGION_ID = countries.REGION_ID AND
countries.COUNTRY_ID = locations.COUNTRY_ID";

// Variables for Counters
$counter_1 = 0;
$counter_2 = 0;
$counter_3 = 0;
$counter_4 = 0;

if($result = mysqli_query($con, $sql1))
{
  if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
    while($row = mysqli_fetch_array($result)) // work through array of results
    {
        $region_id = $row['REGION_ID'];
        switch ($region_id)
        {
          case 1:
            if ($counter_1 == 0)
            {
              echo "<h1>Europe</h1>";
              echo "<img src='images/Europe.png' class='Reg_image' alt='Europe Image'>";
              echo "<table>";
                echo "<tr>";
                  echo "<th>Country Name</th>";
                  echo "<th>City</th>";
                  echo "<th>Street Address</th>";
                  echo "<th>Postal Code</th>";
                echo "</tr>";
              echo "</table>";
            }
            echo "<table>";
              echo "<tr>";
                echo "<td>" . $row['COUNTRY_NAME'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
                echo "<td>" . $row['STREET_ADDRESS'] . "</td>";
                echo "<td>" . $row['POSTAL_CODE'] . "</td>";
              echo "</tr>";
            echo "</table>";
            $counter_1++;
            break;
          case 2:
            if ($counter_2 == 0)
            {
              echo "<h1>Americas</h1>";
              echo "<img src='images/Americas.png' class='Reg_image' alt='Americas Image'>";
              echo "<table>";
                echo "<tr>";
                  echo "<th>Country Name</th>";
                  echo "<th>City</th>";
                  echo "<th>Street Address</th>";
                  echo "<th>Postal Code</th>";
                echo "</tr>";
              echo "</table>";
            }
            echo "<table>";
              echo "<tr>";
                echo "<td>" . $row['COUNTRY_NAME'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
                echo "<td>" . $row['STREET_ADDRESS'] . "</td>";
                echo "<td>" . $row['POSTAL_CODE'] . "</td>";
              echo "</tr>";
            echo "</table>";
            $counter_2++;
            break;
          case 3:
            if ($counter_3 == 0)
            {
              echo "<h1>Asia</h1>";
              echo "<img src='images/Asias.png' class='Reg_image' alt='Asia Image'>";
              echo "<table>";
                echo "<tr>";
                  echo "<th>Country Name</th>";
                  echo "<th>City</th>";
                  echo "<th>Street Address</th>";
                  echo "<th>Postal Code</th>";
                echo "</tr>";
              echo "</table>";
            }
            echo "<table>";
              echo "<tr>";
                echo "<td>" . $row['COUNTRY_NAME'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
                echo "<td>" . $row['STREET_ADDRESS'] . "</td>";
                echo "<td>" . $row['POSTAL_CODE'] . "</td>";
              echo "</tr>";
            echo "</table>";
            $counter_3++;
            break;
          case 4:
            if ($counter_4 == 0)
            {
              echo "<h1>Europe</h1>";
              echo "<table>";
                echo "<tr>";
                  echo "<th>Country Name</th>";
                  echo "<th>City</th>";
                  echo "<th>Street Address</th>";
                  echo "<th>Postal Code</th>";
                echo "</tr>";
              echo "</table>";
            }
            echo "<table>";
              echo "<tr>";
                echo "<td>" . $row['COUNTRY_NAME'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
                echo "<td>" . $row['STREET_ADDRESS'] . "</td>";
                echo "<td>" . $row['POSTAL_CODE'] . "</td>";
              echo "</tr>";
            echo "</table>";
            $counter_4++;
            break;
        }
    }
  }
} 
else
{
    echo "ERROR: Could not connect to execute $sql1. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>