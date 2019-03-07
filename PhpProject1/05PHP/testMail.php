<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once "Mail.php";

    $from = "Charlie Pitch<pitchhawthorn19@gmail.com>";
    $to = "Charlie Pitch<pitchhawthorn19@gmail.com>";
    $host = "ssl://smtp.gmail.com";
    $username = "pitchhawthorn19@gmail.com";
    $password = "boiteatest";
    $subject = "sujet du mail";
    $body = "hello, \n\nHow are you ?";
    $port = "465";
    
    $headers = array('From' => $from, 'To' => $to, 'Subject' => $subject, $smtp = Mail::factory('smtp', array('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password)));
    $mail = $smtp->send($to, $headers, $body);
    if (PEAR::isError($mail)) {
        echo ("<p>" . $mail->getMessage() . "</p>");
        
    } else {
        echo ("<P>Message successfuly sent !</p>");
    }
    
    
    /*mail('pitchhawthorn19@gmail.com', 'Sujet du mail', 'Message du mail') ;*/

?>