<?php

if(!isset($_POST['submit']))
{
    //This page should not be accssed direktly. Need to submit the form 
    echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message']

    //Vadilate first
if(empty($name) || empty($visitor_email))
{
    echo "Namn och email är obligatoriska!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_form = 'it@dolge.se';
$email_subject = "Nytt medelande från hemsidan";
$email_body = "Du har ett nytt meddelande från $name.\n".
                "Detta är meddelandet:\n $message".

$to = "it@dolge.se"; //<== din mail adress
$headers = "From: $email_form \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
    //Send the email!
mail($to,$email_subject,$email_body,$headers);
    //done. redirect to thank you page.
header('Location: Thank-you.html');

    // Funktion to vadilate against any email injections attempts
function IsInjected($str)
{
    $injections = array('(\n+)')
    '(\r+)',
    '(\t+)',
    '(%0A+)',
    '(%0D+)',
    '(%08+)',
    '(%09+)'
);
$inject = join('|', $injections);
$inject = "/$inject/i";
if(preg_match($inject,$str))
    {
        return true;
    }
else
    {
        return false;
    }
}

?>