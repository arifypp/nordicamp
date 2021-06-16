<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $to = "arifypp@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Ny melding fra 'Sabba Invest AS' ";
    $subject2 = "Takk for at du kontaktet oss";
    $message = "Navn: " .$first_name . "\n\n" . $_POST['message'];
    $message2 = "Hello " . $first_name . "\n\n Takk for at du kontaktet oss, vi kontakter deg snart.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "E-post sendt. Takk skal du ha " . $first_name . ", vi kontakter deg snart.";
    echo '<script>setTimeout(function(){location.href="index.html"} , 3000); </script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}

?>