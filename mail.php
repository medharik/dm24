<?php 

mail("med.harik@gmail.com",$_GET['sujet'],$_GET['message']);
echo "Email envoyé";

?>