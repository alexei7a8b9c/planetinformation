<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_substance_and_structure.php';


$pagination = new paginate_substance_and_structure($conn);

?>