<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <title>Check Point</title>
</head>
<body>
    <header class="header">
        <div class="menu-toggle ml-3 mr-2 ">
            <i class="icofont-navigation-menu"></i>
        </div>
        <div class="logo">
                <i class="icon icofont-checked mt-1 mr-1"></i>
                <span class="font-weight-ligh">Check </span>
                <span class="font-weight-ligh">Point</span>
                <i class="icon icofont-dart mt-1 ml-1"></i>
        </div>
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
               <i class="icon icofont-user"></i>
                <span class="ml-3">
                  <?=  $_SESSION['user']->name ?>
                </span>
                <i class="icofont-simple-down mx-2"></i>
            </div>
            <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="logout.php">
                            <i class="icofont-logout mr-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>