<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_computers_and_programming.php';


$pagination = new paginate_computers_and_programming($conn);

?>