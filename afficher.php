<?php require_once('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3><?php echo date('d/m/y h:i:s') ?></h3>
    <form action="" method="post">
        <input type="text" name="search" >
        <input type="submit" name="searchbt" value="Rechercher">

        <?php 
            if(isset($_POST['searchbt'])){
                $search=$_POST['search'];
                $sql="SELECT * FROM message WHERE nom LIKE '%$search%'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                $nbr=mysqli_num_rows($result );
                echo $nbr;
            }
        
        ?>
    </form>
<?php
$req="SELECT * FROM message";
$resultat=mysqli_query($conn,$req);
?>

    <div class="container">
    <div class="table">
    <table>
   <tr> <th>Nom</th><th>Body</th><th>priority</th><th>Type</th><th>Date</th>
   <th>Supprimer</th><th>Modifier</th>
    </tr>
    <?php while($ligne=mysqli_fetch_assoc($resultat)){
        ?>
        <tr>
        <th><?php echo $ligne['Nom']; ?></th>
        <th><?php echo $ligne['body']; ?></th>
        <th><?php echo $ligne['priority']; ?></th>
        <th><?php echo $ligne['type']; ?></th>
        <th><?php echo $ligne['date']; ?></th>
        <th><a href="del.php?del=<?php echo $ligne['id']; ?>"><img src="image/del.png" class="photo" alt=""></a></th>
        <th><a href="edit.php?edit=<?php echo $ligne['id']; ?>"><img src="image/edit.png" class="photo" alt=""></a></th>
        </tr>
<?php }?>

</table>
</div>
<div class="mod">
        <div class="del">
            <h2>Priority</h2>
        <p>1=Low</p>
        <p>2=Medium</p>
        <p>3=High</p>
        </div>
        <div class="del">
            <h2 >Type</h2>
            <p>1=complaint</p>
            <p>2=Suggestion</p>

        </div>
        <a href="index.php" class="lien">Page d'inscription</a>
    </div>

    </div>
</body>
</html>                              