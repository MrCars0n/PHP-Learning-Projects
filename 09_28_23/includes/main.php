<?php include "sendmail.php"; ?>
<h1>Contact Form</h1>
        <form method="post">
            <fieldset>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Name">
            </fieldset>
            <fieldset>
                <label>Mobile</label>
                <input type="text" name="name" placeholder="Enter Mobile">
            </fieldset>
            <fieldset>
                <label>Email</label>
                <input type="text" name="name" placeholder="Enter Email">
            </fieldset>
            <fieldset>
                <label>Message</label>
                <input type="text" name="name" placeholder="Type your Messsage..."></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" name="submit">SUBMIT</button>
            </fieldset>
            <fieldset>
                <button type="reset" name="reset">CLEAR FORM</button>
            </fieldset>
        </form>