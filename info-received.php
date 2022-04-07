<?php


    $to = 'soyebahmed@gmail.com';

    $full_name = $_POST['full_name'];

    $email = $_POST['email'];

    $timeline=$_POST['timeline'];

    $description=$_POST['description'];

    

    $headers = "MIME-Version: 1.0" . "\r\n";
    
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    
    $headers .= 'From: <fayettestoysterhouse@gmail.com>' . "\r\n";
    
    $headers .= '';

 //   $send =  mail($to,"New email from ". $email , " ", $headers);

    




   
   
?>
