<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_plants.php';


$pagination = new paginate_plants($conn);

?>