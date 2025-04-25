<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Médical</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // Include the header section (navigation bar, logo, etc.)
        include ('header.php');
    ?>    
    <main>
        <div class="experience">
            <div class="text1">
               <h2>Offrir une expérience exceptionnelle à nos patients</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus id aliquam enim aut laudantium quidem fuga dolor facere quae pariatur, quo placeat saepe non aspernatur dolore, soluta ad obcaecati earum?</p>
               <button>Voir plus</button>
            </div>
        </div>
        <div class="about-us">
            <div class="text2">
                <h2>À propos de nous</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero similique beatae minus aspernatur, deserunt possimus atque? Repellat iure modi quas!</p>
               <button>Voir plus</button>
            </div>
        </div>
        <div class="service">
            <h2>Nos services</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero similique beatae minus aspernatur, deserunt possimus atque? Repellat iure modi quas!</p>
            <button>Voir plus</button>
        </div>
        <div class="bas-de-page">
            <div class="card-footer">
                <i class="fa-solid fa-heart-pulse"></i>
                <h3>Services</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, ipsa!</p>
            </div>
            <div class="card-footer">
                <i class="fa-solid fa-location-dot"></i>
                <h3>Emplacement</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, ipsa!</p>
            </div>
            <div class="card-footer">
                <i class="fa-solid fa-phone"></i>
                <h3>Contact</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, ipsa!</p>
            </div>
        </div>
    </main>
    <?php
    // Include the footer section (contact info, etc.)
        include 'footer.php';
    ?>  
</body>
</html>