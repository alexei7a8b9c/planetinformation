<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_water_world.php';


$pagination = new paginate_water_world($conn);

?>