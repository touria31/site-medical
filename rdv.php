<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == false) {
    // If the session variable 'authenticated' is not set or false redirect to the login page
    header('Location: login.php');
    exit();
}
$message = '';
$messageRdv = '';
$formulaireVisible = true; // Set the visibility of the appointment form to true by default
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['heure'])){
    $nom = $_POST['nom'];
    $prenom =  $_POST['prenom'];
    $date =  $_POST['date'];
    $heure =  $_POST['heure'];
     // Create a message indicating the appointment details
    $messageRdv = "$nom $prenom vous avez rendez vous à $heure le $date";
     // Set the form visibility to false since the appointment is set
    $formulaireVisible = false;

}else {
    // If the form is not fully filled, display a message prompting the user to schedule an appointment
    $message = "Veuillez prendre un rendez vous.";
};
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
    <div class="rdv-formulaire">
    
    <h2 style="text-align: center;">Prendre un rendez-vous</h2>
    <!-- <?php if ($formulaireVisible): ?> the variable $formulaireVisible is true, the form will be displayed to the user. -->
    <form action="" method="post" class="rdv-form">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" >

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" >

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" >

        <label for="telephone">Téléphone :</label>
        <input type="tel" name="telephone" id="telephone" >

        <label for="date">Date du rendez-vous :</label>
        <input type="date" name="date" id="date" >

        <label for="heure">Heure :</label>
        <input type="time" name="heure" id="heure" >

        <label for="service">Médecin / Service :</label>
        <select name="service" id="service" >
            <option value="">-- Choisir --</option>
            <option value="generaliste">Médecin généraliste</option>
            <option value="pediatrie">Pédiatrie</option>
            <option value="dermatologie">Dermatologie</option>
            <option value="autre">Autre</option>
        </select>
        <input type="submit" value="Envoyer la demande">
    </form>
<?php else: ?>
    <!-- $formulaireVisible is false, the message will be displayed to the user -->
    <p style="text-align:center; margin-top: 30px; font-weight: bold; color: green;">
        <?= $messageRdv ?>
    </p>
<?php endif; ?>

    <p style="color:red; text-align: center;"><?=$message?></p>
    </div>

    <div class="deconnexion">
    <a id="deco" href="login.php">Déconnexion</a>
    </div>
  
    <?php
        include 'footer.php';
    ?>  
</body>
</html>