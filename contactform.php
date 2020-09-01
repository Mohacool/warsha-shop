<?php 

if (isset($_POST['submit'])) {
    echo "submit pressed";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "moha.salama@mail.utoronto.ca";
    $headers = "From: WarshaShop".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);

    header("Location: contact.php?mailsent");

}

?>