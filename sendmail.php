<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "mrsabbirjossain909@gmail.com";   // এখানে নিজের email দাও
    $subject = "New Message from Website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed!";
    }
}
?>