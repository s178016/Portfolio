<?php


if ($_POST['name_surname']!='' || $_POST['email']!=''){
  die('Jesteś botem');
}
else{
$name_surname=$_POST['name_surname2'];
$email=$_POST['email2'];
$phone=$_POST['phone_number'];
$message=$_POST['message'];


$to ="pashka.mozil13@gmail.com,oleksandr@realtypoland.com";
$subject = "Wiadomosc ze strony realtypoland";
$message = "<br />
Imię i nazwisko: ".htmlspecialchars($name_surname)."<br />
Nr telefonu: ".htmlspecialchars($phone)." <br />
Email: ".htmlspecialchars($email)."<br /><br />
Wiadomość:<br /> ".htmlspecialchars($message);
$headers = "Form: kontakt@moziltest.cba.pl <no-reply@realtypoland.com> \r\nContent-type: text/html; charset=utf-8\r\n";
mail($to, $subject, $message, $headers);
header('Location: thankyou.html');
}
exit;
?>