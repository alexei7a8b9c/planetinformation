<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_society.php';


$pagination = new paginate_society($conn);

?>