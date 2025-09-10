<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_stars.php';


$pagination = new paginate_stars($conn);

?>