<?php
require('php/VHtml.php');

$EX = isset($_REQUEST['EX']) ? $_REQUEST['EX'] : 'home';

switch($EX)
{
    case 'home'      : home();       break;
    default : home();
}

require('./php/layout.php');

function home() {
    global $page;
    $page['title'] = 'Projet BDD';
    $page['arg'] = './pages/home.php';
}

?>