<!DOCTYPE html>
<html>

<?php include 'include/header.php'; ?>

    <title>Djordje Janjic | Photography</title>
    <link rel="icon" 
      type="image/png" 
      href="favicon.png">

<body>

<div class = "menu">
    <a href="index.php">Početna</a>
    <a href="https://www.instagram.com/_djordjejanjic/" target="_blank">Instagram</a>
    <a href="include/equipment.php">Oprema</a>
    <a href="include/contact.php">Kontakt</a>
</div>

<section class = "main">

<img class="main_logo" src="assets/logo-small-alternative.png">

<p id="main_message">Izaberi lokaciju i iskusi <span class="avantura">avanturu</span> kroz objektiv</p>

</section>

<!-- Prikaz Mape -->
<div class="folium-map" id="map_807a4efe44ed4d2b93a8eb957ffc4584"></div>
<!-- Prikaz Mape -->

</body>

<script src="js/main.js"></script>

<?php include 'include/my_map.php'; ?>

<?php include 'include/footer.php'; ?>

</html>

