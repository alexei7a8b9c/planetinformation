<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_observations.php';


$pagination = new paginate_observations($conn);

?>