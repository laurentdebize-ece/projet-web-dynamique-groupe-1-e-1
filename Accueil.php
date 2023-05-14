<?php
session_start();

if(!isset($_SESSION['id'])) {
    header('Location: Connexion.php');
}
?>

<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Accueil.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Accueil </title>
	<style>
    /* Styles CSS pour le menu déroulant */
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Styles CSS pour le slider */
    .slider-container {
      position: relative;
      width: 500px;
      height: 300px;
      margin: 0 auto;
      margin-top: 50px; /* Ajout de la marge supérieure pour abaisser les images */
      overflow: hidden;
    }
    
    .slider {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: flex-end;
      transition: transform 0.5s ease;
    }
    
    .slider img {
      width: auto;
      height: 80%;
      object-fit: contain;
      margin-right: 10px;
    }
    
    .slider-buttons {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
    }
    
    .slider-button {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #000;
      margin: 0 6px;
      cursor: pointer;
      outline: none;
      border: none;
      padding: 0;
    }
  </style>
</head>
<body>
	<?php include("menu.php"); ?>
	<div>
		<h2> Bienvenue sur Omnes MySkills !</h2>
		<p id ="intro"> Omnes MySkills est la plateforme en ligne officielle de l'ECE qui regroupe les élèves, les professeurs et les admins. Sur ce site, vous pourrez consulter vos matières et compétences à travers les différents onglets. Amusez-vous bien ! <p>
	<?php include("footer.php"); ?>
	<!-- Slider -->
  <div class="slider-container">
    <div class="slider">
      <img src="Informatique web.png" alt="Image 1">
      <img src="Physique web.jpg" alt="Image 2">
      <img src="Mathématiques web.jpg" alt="Image 3">
    </div>
    <div class="slider-buttons">
      <button class="slider-button"></button>
      <button class="slider-button"></button>
      <button class="slider-button"></button>
    </div>
  </div>
  
  <script>
    // JavaScript pour le slider
    const slider = document.querySelector('.slider');
    const sliderButtons = document.querySelectorAll('.slider-button');
    let translateValue = 0;
    
    function showImage(index) {
      translateValue = -index * 100;
      slider.style.transform = `translateX(${translateValue}%)`;
    }
    
    sliderButtons.forEach((button, index) => {
      button.addEventListener('click', () => {
        showImage(index);
      });
    });
  </script>
</body>
</html>
