<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Matières.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Matières </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<?php include("footer.php"); ?>

  <div class="slider-container">
  <div class="slider">
  <a href="MesCompetences.php">
    <img src="Informatique.jpg" alt="Image 1" class="slider-image">
  </a>
  <a href="MesCompetences.php">
    <img src="Physique.jpg" alt="Image 2" class="slider-image">
  </a>
  <a href="MesCompetences.php">
    <img src="Mathématiques.jpg" alt="Image 3" class="slider-image">
  </a>
  </div>
    <div class="slider-buttons">
      <button class="slider-button"></button>
      <button class="slider-button"></button>
      <button class="slider-button"></button>
    </div>
  </div>
  <script>
    const slider = document.querySelector('.slider');
    const sliderButtons = document.querySelectorAll('.slider-button');
    let translateValue = 0;
   
    function showImage(index){
      translateValue = -index * 30;
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