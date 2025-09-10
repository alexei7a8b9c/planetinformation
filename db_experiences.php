<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_experiences.php';


$pagination = new paginate_experiences($conn);

?>