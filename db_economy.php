<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_economy.php';


$pagination = new paginate_economy($conn);

?>