<?php session_start(); ?>
<!DOCTYPE html>

<html>

<?php include_once('pokemon.class.php') ?>

<head>
    <title>Classic Pokemon Battle</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>

    <h1>Prepare to Battle!</h1>

    <section class="poke-selection">

        <form action="./battle.php" method="POST">

            <h1>Choose your Pokemon!</h1>

            <input type="radio" name="poke-selection" value="Bulbasaur"  required> Bulbasaur<br>
            <input type="radio" name="poke-selection" value="Charmander" required> Charmander<br>
            <input type="radio" name="poke-selection" value="Squirtle" checked required> Squirtle<br>
           <br>

            <h1>Choose your opponents Pokemon!</h1>

            <input type="radio" name="poke-selection-enemy" value="Bulbasaur"  required> Bulbasaur<br>
            <input type="radio" name="poke-selection-enemy" value="Charmander" checked required> Charmander<br>
            <input type="radio" name="poke-selection-enemy" value="Squirtle" required> Squirtle<br>
           <br><br>

            <input type="submit" name="login" value="Battle!!">

        </form>

        
        <?php foreach( $player->attacks as $atk ) : ?>
            <input type="submit" name="attack"
            value="<?php echo $name; ?>">
        <?php endforeach; ?>

            <?php /* code example

            $damage = $_POST['attack'];
            $player->attacks[$attack]['damage']

            $attack = $_POST['attack'];
            $_SESSION['player_health'] -= $player->attacks[$attack]['damage'];
            
            */
            ?>

    </section>

</body>

</html>