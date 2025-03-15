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
        <form method = "POST" action="#">
        <div class = "input-container">
            <input 
            type = "text" 
            maxlength ="100"
            name = "input"
            placeholder="waht you have to do?"
            >
        </div>
        <div>

        </div>
        </form>
    </main>
    
    

    <?php 
    if(isset($_POST["input"])) {
    $input_daten = $_POST["input"];
    $sichere_daten = htmlspecialchars($input_daten);
    }

    if(isset($sichere_daten)) {
        echo $sichere_daten;

    }
    ?>

    

    
</body>
</html>