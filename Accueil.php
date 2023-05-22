<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Accueil.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Accueil </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<div id ="intro">
		<?php
			session_start();
		?>
		<label> Bienvenue sur Omnes MySkills <?php echo $_SESSION["prenom"] . ' ' . $_SESSION["nom"]; ?></label> <br><br>
		<div class="image-container">
    	<p class ="intro-text">Omnes MySkills est la plateforme en ligne officielle de l'ECE qui regroupe les élèves, les professeurs et les admins. <br> Sur ce site, vous pourrez consulter vos matières et compétences à travers les différents onglets. Amusez-vous bien !</p>
    	<img src="Campus-Lyon.png" alt="Dinosaure campus" class="small-image">
  		</div>
	</div>
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