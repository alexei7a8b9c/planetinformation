<?php
$conn = new PDO("mysql:host=localhost;dbname=science_abcd",'root','');

include_once 'pagination_scheme_and_fee.php';


$pagination = new paginate_scheme_and_fee($conn);

?>