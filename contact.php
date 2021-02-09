<?php 

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

if(empty($name) || empty($email) || empty($phone) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("chirag.evrenglobalsolutions@gmail.com", "Bienvenu Message", $message, "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Thanks for Contacting Us');
        window.history.log(-1);
    </script>";
}

?>