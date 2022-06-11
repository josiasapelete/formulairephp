<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Document</title>
</head>
<body>
 
 <div id="edit">
        
<h1>Veuiller Saisir les Nouvelles informations</h1>
<?php echo "   <br>  <a classe=\"lien\" href=\"afficher.php\">Tableau de bord</a>
  <br> <br> "; ?>

<form  method="post">
<label for="name">Name</label>
<input type="text" name="name" required id="name">
<label for="message">Message</label>
<textarea name="message" required id="message"></textarea> 

<label for="priority" >Priority</label>
<select name="priority" id="priority">
    <option value="1">Low</option>
    <option value="2">Medium</option>
    <option value="3">High</option>
</select>

<fieldset>
    <legend>type</legend>
    <label for="complaint">
    <input type="radio" name="type" value="1">
    complaint
    </label> <br>
    <label for="Suggestion">
    <input type="radio" name="type" value="2">
    Suggestion
    </label> 
</fieldset>

<input type="submit" name="editbt" value="Mettre à jour">
</form>
<?php
   
    if(isset($_POST['editbt'])){
        $name = $_POST["name"];
        $message = $_POST["message"];
         $priority = filter_input(INPUT_POST,"priority",FILTER_VALIDATE_INT);
         $type =filter_input(INPUT_POST,"type",FILTER_VALIDATE_INT);
        $mod=$_GET['edit'];
       
        $req="UPDATE message SET nom='$name', body='$message',
        priority='$priority',type='$type' WHERE id='$mod'";
        $resultat= mysqli_query($conn,$req);
        if($resultat){
            echo "Modification réussie";
            header('location:afficher.php');

        } else {
            echo "Modification echouée";

        }
     
    }
?>
 </div>   
</body>
</html>