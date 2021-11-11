<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <script src=""></script>
    <title>Meow Online</title>
</head>
<?php
    include "connection.php";
?>
<body>
<header>
        <div class="navbar">
            <a class="logo" href="#">Meow Online</a>
            <ul class="nav">
                <li><a href="#home">Home</a></li>
                <li class="dropa"><a href="#menu">Information</a>
                    <div class="dropdown-content">
                        <ul class="dd">
                            <a href="Jobs.php">Jobs</a>
                            <a href="Skills.php">Skills</a>
                            <a href="Maps.php">Maps</a>
                            <a href="NPC.php">NPC</a>
                            <a href="Monsters.php">Monsters</a>
                            <a href="Armory.php">Armory</a>
                        </ul>
                    </div>  
                </li>
            </ul>
        </div>
    </header>
    <div class="pimg1" id="home">
        <div class="ptext">
            <span class="border">
                Meow Online
            </span>
        </div>
    </div>    <section class="section section-light">
        <h2>Welcome to the wonderful land of Shiltz!</h2>
        <p>
            Experience a world of adventure as you journey through a vibrant and enchanting world filled with whimsical characters in search of riches, fame, love, and friendship.    
            Become a famous citizen of Shiltz as you complete challenging quests and help townspeople with their daily tasks while gaining experience and rewards along the way.    
        
        </p>
    </section>

    <div class="pimg2">
        <div class="ptext">
            <span class="border trans" >
                You won't be alone
            </span>
        </div>
    </div>
    <section class="section section-dark">
        <h2>There’s strength in numbers</h2>
        <p>
        Scared of fighting scary monsters alone? Don’t worry! Just create a party with five other friends to defeat even the biggest Bales. Explore the land of Shiltz with your friends!        </p>
    </section>

    <div class="pimg3">
        <div class="ptext">
            <span class="border trans">
                Train your pets
            </span>
        </div>
    </div>
    <section class="section section-light">
        <h2>I don’t go anywhere without my sidekick</h2>
        <p>
        Choose from various pets as your sidekick to accompany you on your exciting expeditions and battles. Raise your pet with care by feeding it properly, and watch it evolve to a great companion who will never leave your side.        </p>
    </section>

    <div class="pimg4">
        <div class="ptext">
            <span class="border trans">
                Find your company
            </span>
        </div>
    </div>
    <section class="section section-dark">
        <h2>I think I’m in love</h2>
        <p>
        Share your adventures with a special someone by being a couple. Send each other love notes, wear matching costumes, and earn roses together as your relationship evolves and ultimately get married in the Shiltz Chapel. Compete to take the top spot in the ranking system. Have a friendly battle with your friends and foes to find out who’s the true hero of Shiltz.        </p>
    </section>

    <div class="pimg1">
        <div class="ptext">
            <span class="border">
                Meow Online
            </span>
        </div>
    </div>
    <?php include "Footer.php"?>
</body>
</html>