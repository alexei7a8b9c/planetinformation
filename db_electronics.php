<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_electronics.php';


$pagination = new paginate_electronics($conn);

?>