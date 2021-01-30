<?php 
define("HW", "Hello World!");
$text = "Learning PHP";
$text = HW;
$hey = "Hello";
$wereld = "World!";
$arrayTest = array("Hello", "World!");

?>



<!DOCTYPE html>
<html>
<body>
<h1> <?php $text; ?> </h1>
<!--Maak een PHP applicatie die de zin "hello world!" in een h1 tag op het scherm laat zien (zonder gebruik te maken van variabelen of constanten)  -->
<?php
echo "<h1>Hello World! </h1>";
?>
<!-- 2. Doe dit zelfde weer alleen maak nu gebruik van een constanten waar "hello world!" in staat -->
<h1><?php echo $text;?> </h1>

<!-- Doe dit zelfde weer alleen maak nu gebruik van een variabelen waar eerst "Learning PHP" in staat en op de volgende regel veranderd wordt met de waarde van de constanten (het resultaat moet nog het zelfde zijn als de vorige 2 opdrachten) -->
<h1><?php echo HW;?> </h1>


<!-- 4. Toon nu de zin hello world! in een h1 tag maar maak gebruik van 2 variabelen, 1 met het woord "hello" en de andere met het woord "world!" -->
<h1><?php echo $hey, " ",$wereld;?> </h1>

<!-- 5. Probeer het nu eens met een array waar in de eerste plek in de array gevuld is met "hello" en de tweede met "world!"  -->
<h1><?php echo implode(' ',$arrayTest);?> </h1>










</body>
</html>