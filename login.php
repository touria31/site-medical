<?php
session_start(); // Start a new session
$message = ''; // Initialize a variable to store the message (error or success) for the user

// Check if the form has been submitted (via POST method)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Check if both 'username' and 'password' fields are filled
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username']; // Store the 'username' value in the $username variable
        $password = $_POST['password']; // Store the 'password'  value in the $password variable
        
         // Check if the password is correct (in this case, '123456' is the correct password)
        if ($password == '123456') {
            $_SESSION['authenticated'] = true; // Set the session variable 'authenticated' to true to indicate the user is logged in
            header('Location: rdv.php');  //Redirect the user to the protected page (rdv.php)
            exit(); // Exit the script after the redirection to prevent further execution

        }else {
             // If the password is incorrect, set an error message
            $message = "Mot de passe incorrect.";
        }
    } else {
        // If any of the fields are empty, set a message asking the user to fill in both fields
        $message = "Veuillez remplir tous les champs.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Médical</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include ('header.php');
    ?> 
     <div class="container">
     <form action="login.php" method="post" class="formulaire">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" >

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" >

        <input id="button" type="submit" value="Se connecter">
    </form>
    
    <?php if ($message): ?>
         <!-- Error message display (only if $message is not empty) -->
        <p style="color: red; text-align:center"><?= $message ?></p>
    <?php endif; ?>
     </div>
    
    <?php
        include 'footer.php';
    ?>  
</body>
</html>