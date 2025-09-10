<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_planets.php';


$pagination = new paginate_planets($conn);

?>