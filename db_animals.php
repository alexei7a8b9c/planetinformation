<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_animals.php';


$pagination = new paginate_animals($conn);

?>