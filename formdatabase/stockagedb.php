<?php 
//connexion a la base de donnees mysql
$connexion=mysqli_connect("localhost","root","","dbdm24");
//recuperer les donnees envoyees depuis le form
$nomprenom=mysqli_real_escape_string($connexion,$_GET['np']);
$sujet=mysqli_real_escape_string($connexion,$_GET['sujet']);
$message=mysqli_real_escape_string($connexion,$_GET['message']);
//on prepare la requete sql a envoyer a la base de donnees
//insert 
$sql="insert into contact(nomprenom,sujet,message) values('$nomprenom','$sujet','$message')";

//executer la requete
mysqli_query($connexion,$sql);
mail("osbt.school.direction@gmail.com","un contact vient d'etre enrgistre ds la bd",$message);

?>

<?php 

mail("med.harik@gmail.com",$_GET['sujet'],$_GET['message']);
echo "Email envoyé";

?>