<?php
if(isset($_POST['submit'])) {
    $to = "xxxxxxxx@gmail.com"; // Your email address
    $name = $_POST['name'];
    $from = $_POST['email'];
    $phone = $_POST['mobile'];
    $message = $_POST['message'];
    $subject = "Contact Form Details";
    $headers = "From:" . $from;
    $result = mail($to, $subject, $message, $headers);

    echo "<ul>" + "<li>" + $name + "</li>"
                + "<li>" + $from + "</li>"
                + "<li>" + $phone + "</li>"
                + "<li>" + $message + "</li>" + 
            "</ul>";
            
    if ($result) {
        echo '<script type = "text/javascript">alert("Your Message was sent successfully");</script>';
        echo '<script type = "text/javascript">window.location.href = window.location.href;</script>';
    }
    else {
        echo '<script type = "text/javascript">alert("Sorry! Message was not sent, try again later");</script>';
        echo '<script type = "text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>