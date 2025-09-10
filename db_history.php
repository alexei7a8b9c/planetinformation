<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_history.php';


$pagination = new paginate_history($conn);

?>