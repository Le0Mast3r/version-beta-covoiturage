<?php 
include('./database/connection.php');
//Start session
session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
		<link rel="stylesheet" href="./driver_css/style.css">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.html" class="logo">M.</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="./add.php"><span class="fa fa-plus"></span> Ajouter</a>
          </li>
          <li>
            <a href="./myTrips.php"><span class="fa fa-road"></span> Mes Trajets</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cogs"></span> Paramètre</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
          </li>
          <li>
            <a href="./checher.php"><span class="fa fa-search"></span> Chercher</a>
          </li>
          <li>
            <a href="./index.php"><span class="fa fa-sign-out"></span> Logout</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            
              
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>