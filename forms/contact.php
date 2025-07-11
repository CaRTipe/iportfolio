<?php
include "db.php";


if (isset($_POST['send'])) {

  // echo "Hello, World!";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if (addMessage($name, $email, $subject, $message)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
}
