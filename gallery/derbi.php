<!DOCTYPE html>
<html>
<header>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />  
    <?php include '../include/scripts.php' ?>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responsive_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../style/gallery-grid.css">
    <title>Djordje Janjic | Photography</title>
    <link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <script src="../js/show_gallery.js"></script>
</header>

<body>

<?php include '../include/menu.php' ?>

<?php include '../include/loading.php' ?>

<div class="row" id="butt">

  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="fudbal">Fudbal</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="kosarka">Košarka</button>

  </div>
  <!-- Grid column -->

</div>
<div class="gallery" id="gallery">


 <?php include 'kosarka.php' ?>
  <?php include 'fudbal.php' ?>

</div>

<div id="divider"></div>

<script src="../js/loading.js"></script>


</body>

<?php include '../include/footer.php'; ?>

</html>