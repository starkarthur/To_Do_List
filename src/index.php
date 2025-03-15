<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-Liste</title>
    <link rel="stylesheet" href="index.css"> 
</head>
<body>
    <main>
        <form method = "POST" action="database.php">
        <div class = "login-container">
            <label><strong>Email :</strong></label>
            <input 
            type = "email" 
            maxlength ="100"
            name = "email"
            >
        </div>
        </form>
    </main>
    
    

    <?php 
    if(isset($_POST["input"])) {
    $input_daten = $_POST["input"];
    $sichere_daten = htmlspecialchars($input_daten);
    }
    ?>

    

    
</body>
</html>