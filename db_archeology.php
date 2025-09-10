<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_archeology.php';


$pagination = new paginate_archeology($conn);

?>