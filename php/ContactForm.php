<?php
if (isset($_POST['submit'])) {
  // code...
  $name =$_POST['name'];
  $mailFrom =$_POST['email'];
  $message =$_POST['message'];

  $mailTo = "Rieser.mpr@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have receieved an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: Contact.html");
  

}
 ?>
