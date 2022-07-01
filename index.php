<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>
    
    <div class="form">
        <h1>Contact</h1>

        <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea> 
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
        <label for="accept">
            <input type="checkbox" name="terms">
            J'accepte les règles et conditions d'utilisations
        </label> <br>
        <button>Envoyer </button>
         <a href="afficher.php" class="lien">afficher</a>

        </form>
    </div>
    
    
</body>
</html>