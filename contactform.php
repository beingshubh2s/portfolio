<?php
    $name = $_POST['name'];
    $visiter_email = $_POST['email'];
    $message = $_POST['message'];

    $email_to = "shub23c@gmail.com";
    $email_from = "shub23c@gmail.com";
    $email_subject = "Contact Message from ".$visiter_email;

    $headers = "From: ".$email_from;
    //$headers .= "Reply-to: ".visiter_email;
    $txt = "Name: ".$name."\nEmail: ".$visiter_email."\nMessage:\n".$message;

    mail($email_to, $email_subject, $txt, $headers);
    header("Location: index.html");
?>