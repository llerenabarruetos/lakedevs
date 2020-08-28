<?php
    // Security check
    if(!isset($_POST["name"]))
    {
        header("Location:https://www.lakedevs.com/");
    }
    else
    {
        // Get form values
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = "Message for LakeDevs, sir: '" . $_POST['subject'] . "'";
        date('Y/m/d', strtotime($dob));
        $dateSent = date('Y-m-d H:i:s');
        $message = $_POST["message"] . "\n\nSend via LakeDevs.com\nSender Name: '$name'\nEmail of Sender: $email\nTimestamp: $dateSent";
    
        // Email info
        $email_to = "myemail@email.com";
        $email_header = "From: emailSender@lakedeep.org\r\n";
    
        // Backup new email on emails database
        require 'dbh.inc.php';
        $websiteOfMessage = "LakeDevs";
        $sql= "INSERT INTO email(website, name, email, subject, message, date)
            VALUES (?,?,?,?,?,?)";
            // emails DB also has 'id' but since that auto-increments, it's not in the parameters above ^
        $stmt = mysqli_stmt_init($conn);
        if(mysqli_stmt_prepare($stmt,$sql))
        {
            mysqli_stmt_bind_param($stmt,"ssssss", $websiteOfMessage, $name, $email, $subject, $message, $dateSent);
            mysqli_stmt_execute($stmt);
        }
    
        // Send email
        if (mail($email_to, $subject, $message, $email_header))
            header("Location:https://www.lakedevs.com/thank-you");
        else
            echo "Error: Mail function failed.";
    }
?>