<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css">
<title>Dice Roller</title>
</head>
<body>
<h1>Random Dice Roller</h1>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="dice-num">Number of Rolls</label>
    <input type="number" name="dice-num" max="6" min="1" required value="1">

    <label for="dice-sides">Number of sides</label>
    <select name="dice-sides" id="diceSides" required>
        <option value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        
    </select>
    <button type="submit" name="dice-roll-btn" value="Roll the dice">Roll the dice</button>
    
</form>

<?php

    if (isset($_POST["dice-roll-btn"])) {
        $diceNum = $_POST["dice-num"];
        $diceSides = $_POST["dice-sides"];

        $diceArray = array();
        for ($i = 0; $i < $diceNum; $i++) {
            array_push($diceArray,rand(1, $diceSides));

            ?>

            <p> <?php echo $diceArray[$i] ?> </p>
        <?php
        };

      
    }

    ?>

</body>
</html>