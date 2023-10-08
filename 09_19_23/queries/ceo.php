<?php
// Connect to server and database
$con = mysqli_connect("localhost", "jwestfal_student", "student#2023", "jwestfal_office");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//Perform query
$sql = "SELECT FIRST_NAME, LAST_NAME FROM employees WHERE FIRST_NAME='Steven' AND LAST_NAME='King'";

if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {    // work through array of results
            echo "<span class='ceo'>" . $row['FIRST_NAME'] . " " . $row['LAST_NAME'] . "</span>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No record matching your query were found.";
    }
} else {
    echo "ERROR: Could not connect to execute $sql. " . mysqli_error($con);
}

// Close connection
//mysqli_Close($con);
?>