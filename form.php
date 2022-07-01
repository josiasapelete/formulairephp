<?php   require_once('connect.php');
        
        $name = $_POST["name"];
        $message = $_POST["message"];
         $priority = filter_input(INPUT_POST,"priority",FILTER_VALIDATE_INT);
         $type =filter_input(INPUT_POST,"type",FILTER_VALIDATE_INT);
         $terms = filter_input(INPUT_POST,"terms",FILTER_VALIDATE_BOOL);
       
        //  var_dump($name,$message,$priority);
        if (! $terms) {
            die("Vous devez accepter");
        }
        $sql = "INSERT INTO message (nom,body,priority,type)
        values (?,?,?,?) ";

        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            die(mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt,"ssii",
        $name,$message,$priority,$type); 
        mysqli_stmt_execute($stmt);
        echo "Informations enrégistrées";
        header('location:index.php');

                                        
?> 