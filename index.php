<?php
session_start();
$_SESSION['current_session'] = "home";
include 'header.php'; 


include url('indexpages/promovideo.php');
include 'indexpages/introduction.php';
include 'indexpages\shortservices.php';
include 'indexpages\prototype.php';
include 'indexpages\slide.php';
include 'indexpages\market.php';
include 'indexpages\invester.php';
include 'indexpages\starts.php';
include 'indexpages\careers.php';
include 'indexpages\about.php';


include 'footer.php'; 

?>