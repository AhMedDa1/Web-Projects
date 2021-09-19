<?php require 'inclolude/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

	<!-- nav bar start -->
	<nav class="navbar navbar-expand-lg navbar-light" style="border-bottom:inset">
		<div class="container">
	  <a class="navbar-brand" ><span>NeeLaiN</span><span>EnGiNeeRinG</span></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link " href="index.php">Home</a>
	      </li>
				<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item dropdown">
	        <a class="nav-link" href="event.php">Events</a>
	      </li>
				<li class="nav-item dropdown">
	        <a class="nav-link" href="lecture.php">Lectures</a>
	      </li>
	      <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Our clubs
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="Club/English.php">English Club</a>
	          <a class="dropdown-item" href="Club/Reading.php">Reading Club</a>
	          <a class="dropdown-item" href="Club/Security.php">Security Club</a>
						<a class="dropdown-item" href="Club/Programming.php">Programming Club</a>
						<a class="dropdown-item" href="Club/Religous.php">Religous Club</a>
						<a class="dropdown-item" href="Club/development.php">development Club</a>
						<a class="dropdown-item" href="Club/Math.php">Math Club</a>
						<a class="dropdown-item" href="Club/Physics.php">Physics Club</a>
						<a class="dropdown-item" href="Club/Anime.php">Anime Club</a>
						<a class="dropdown-item" href="Club/Desginer.php">Desginer Club</a>
	        </div>
	      </li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	           Conference
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="Club/SecCon.php">Security Conference</a>
						<a class="dropdown-item" href="Club/proCon.php">Programming Conference</a>
	        </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:-106px;padding-right: 3.5rem;">Login</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="slogin.php">As a Student </a>
	          <a class="dropdown-item" href="login.php">As a Teacher</a>

					</div>
			  </li>
	    </ul>
	  </div>
</div>
</nav>
