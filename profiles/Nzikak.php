﻿<?php
$wordquery = "SELECT * FROM secret_word";
$userquery = "SELECT * FROM interns_data WHERE username = 'Nzikak' ";
$word = $conn->query($wordquery);
$username = $conn->query($wordquery);
$result = $username->fetch(PDO::FETCH_OBJ)->username;
$secret_word = $word->fetch(PDO::FETCH_OBJ)->secret_word;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nsikak Isaac - Profile Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}

#bodyId {
   max-height: 100%;
   margin: 0;
   background-color: rgba(32,178,170, 0.6);
   }
   
.profilecontainer {
     width: 30%;
	 height: 90%;
     min-width: 300px;
	 min-height: 90%;
	 text-align: center;
	 border: 2px solid #20b2aa;
	 margin: 5% auto;
	 background-color: #48d1cc;
	 border-radius: 10px;	 
	 box-shadow: 20px 20px 20px 20px rgb(0, 0, 0, 0.2);
}  
#ppic{
     max-width: 40%;
	 max-height: 40%;
	 border-radius: 50%;
	 margin: auto;
	 display: block;
	 border: 4px solid #20b2aa;
	 
}

p {
   font-style: italic;
}

.bg {
  background-color: #20b2aa;
  border-radius: 2px;
}  

#social {
    margin-top: 47%;
	background-color: #20b2aa;
	border-radius: 5px;
	font-size: 18px;
	font-weight: bold;
}

.icons {
    color: #ADD8E6;
	font-size: 30px;
}

.icons:hover {
    color: #48d1cc;
}

@media only screen and (max-width: 480px) {
    .profilecontainer {
     min-width: 90%;
	 min-height: 90%;
}
</style>
</head>

<body id="bodyId">
<div class="profilecontainer">
<header>
<div class="bg">
<h1><i class="fa fa-user-circle"></i> Nsikak Isaac</h1>
</div>
</header>

<br />

<img id="ppic" src="http://res.cloudinary.com/brainiac/image/upload/v1524873777/IMG_20171125_212503_899_dx8kha.jpg" 
title="Nsikak" alt="Nsikak">
<br />
<br />

<div class="bg">
<h2>&nbsp;<i class="fa fa-id-card-o"></i> Bio </h2>
<p>Tech Enthusiast, Android app developer, Music afficionado, Goal Getter, Staunch Chelsea fan. 
</p>
</div>

<div id="social">
<i class="fa fa-users"></i> Connect With Me On
<br />
<a class="icons" title="Fb: Nzikak Isaac" target="_blank" href="https://fb.com/profile.php?id=100010635757410"><i class="fa fa-facebook-square"></i></a>
<a class="icons" title="Github: Nzikak" target="_blank" href="https://github.com/Nzikak"><i class="fa fa-github"></i></a>
<a class="icons" title="Twitter: @Nzikak" target="_blank" href="https://twitter.com/iam_nsikak"><i class="fa fa-twitter"></i></a>
</div>
</div>
</div> 


</body>
</html>