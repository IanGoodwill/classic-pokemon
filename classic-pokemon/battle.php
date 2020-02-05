<!DOCTYPE html>

<html>

<?php include 'pokemon.class.php'; ?>
<?php session_start(); ?>

<head>
    <title>Classic Pokemon Battle</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>

    <h1 class="lets-battle">Let's Battle!</h1>

    <a href="./index.php"> Back to selection page</a>

    <section class="versus">
        <?php echo "You have selected: " ?>
        <?php  echo  $_POST["poke-selection"]; ?> 
            <br>
        <?php echo "Your opponent has selected: " ?>
        <?php  echo  $_POST["poke-selection-enemy"]; ?> 
     
    </section>

    <article class="battle-container">

        <section class="player1">

        <h2>Welcome:  <?php  echo  $_POST["poke-selection"]; ?> </h2>

        <ul>
            <li>Battle Log</li>
        </ul>

        <figure class="pokemon-img">

        <?php

        if($_POST["poke-selection"] == "Bulbasaur")
        echo '<img src="./img/bulbasaur.png" alt="icon" aria-label="A picture of a pokemon called Bulbasaur.">';
        if($_POST["poke-selection"] == "Charmander")
        echo '<img src="./img/charmander.png" alt="icon" aria-label="A picture of a pokemon called Charmander.">';
        if($_POST["poke-selection"] == "Squirtle")
        echo '<img src="./img/squirtle.png" alt="icon" aria-label="A picture of a pokemon called Squirtle.">';
        else echo "Please select a starter Pokemon"
        ?>

        </figure>

        <div class="health-bar">

        <h3>Current health is <strong>7</strong>

            <figure>

                <img src="./img/health-bar-seven-health.png" aria-label="A health Bar that shows current health of Pokemon.">

            </figure>

        </div>

        <button type="button"><?php echo  $_POST["Bulbasaur"]['attack1'] ?></button>
        <button type="button">Attack 2</button>
        <button type="button">Attack 3</button>


        </section>

        <section class="player2">

        <h2>Welcome:  <?php  echo  $_POST["poke-selection-enemy"]; ?> </h2>

        <ul>
            <li>Battle Log</li>
        </ul>

        <figure class="pokemon-img">

        <?php
       if($_POST["poke-selection-enemy"] == "Bulbasaur")
       echo '<img src="./img/bulbasaur.png" alt="icon" aria-label="A picture of a pokemon called Bulbasaur.">';
       if($_POST["poke-selection-enemy"] == "Charmander")
       echo '<img src="./img/charmander.png" alt="icon" aria-label="A picture of a pokemon called Charmander.">';
       if($_POST["poke-selection-enemy"] == "Squirtle")
       echo '<img src="./img/squirtle.png" alt="icon" aria-label="A picture of a pokemon called Squirtle.">';
       else echo "Please select a starter Pokemon"
        ?>

        </figure>

        <div class="health-bar">

        <h3>Current health is <strong>9</strong>

            <figure>

                <img src="./img/health-bar-nine-health.png" aria-label="A health Bar that shows current health of Pokemon.">

            </figure>

        </div>

        <button type="button">Attack 1</button>
        <button type="button">Attack 2</button>
        <button type="button">Attack 3</button>


        </section>

    </article>

</body>

</html>