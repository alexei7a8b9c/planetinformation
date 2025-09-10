<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_mechanics.php';

$pagination = new paginate_mechanics($conn);

?>