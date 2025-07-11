<?php
include "db.php";


if (isset($_POST['send'])) {
  if (isset($_POST['name']) && $_POST['email'] && $_POST['subject'] && $_POST['message']) {

    if (addMessage($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
      echo "Message sent successfully!";
      header("Location: ../index.php#home");
      exit();
    } else {
      echo "Failed to send message. Please try again later.";
    }

}
} else {
  echo "Please fill in all fields.";

}
