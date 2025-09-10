<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_comets_and_asteroids.php';


$pagination = new paginate_comets_and_asteroids($conn);

?>