<?php
/* $headers= 'From: ' . $email . '\r\n';
$mymail='khatershaimaa60@gmail.com';
mail($mymail,$name,$phone,$subject,$headers);*/
print_r($_POST);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailto="khatershaimaa60@gmail.com";
    $headers= "From: " .$email;
    $txt="received form ".$name.".\n\n".$message;
    mail($mailto,$phone,$txt,$headers);
    header("Location: index.php?lang=en#Contact_us");

}
