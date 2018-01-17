<?php

// Page
$vpage = new VHtml();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $page['title']; ?></title>
    <link rel="stylesheet" href="./css/main.css">

    <script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script> <!-- Inclusion du jquery  -->



    <?php
    if (isset($page['css'])) {
        echo '<link rel="stylesheet" type="text/css" href="'.$page['css'].'" />' ;
    }
    ?>

</head>
<body>
<nav>

    <!-- Travail sur la fouille -->

    <?php
    $nav = new VHtml();
    $nav->showHtml('./pages/nav.php');
    ?>
</nav>

    <!-- Différentes indications  -->

<div class="page">
    <?php $vpage->showHtml($page['arg']); ?>
</div>

<script type="text/javascript" src="./js/main.js"></script>     <!-- Déf de nos fonctions  -->

</body>