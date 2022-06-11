<?php 
require_once('connect.php');

if(isset($_GET['del'])){
$del=$_GET['del'];
$req= "DELETE FROM message WHERE id=$del";
$resultat= mysqli_query($conn,$req);
if($resultat){
    echo "Suppression réussie";
    header('location:afficher.php');

} else{
    echo "Suppression échouée";
}
}

?>
