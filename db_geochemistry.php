<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_geochemistry.php';


$pagination = new paginate_geochemistry($conn);

?>