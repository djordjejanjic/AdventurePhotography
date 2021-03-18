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
</header>
<body>

<?php include '../include/menu.php' ?>

<?php include '../include/loading.php' ?>

<div class="gallery_container">
    <div class="tz-gallery">
    
                 <a class="lightbox" href="../img/djavolja_varos/pogled-sa-vrha.jpg">
                    <img src="../img/djavolja_varos/pogled-sa-vrha.jpg" alt="Pogled-sa-vrha">
                </a>
                <a class="lightbox" href="../img/djavolja_varos/djavolja-varos-druga-perspektiva.jpg">
                    <img src="../img/djavolja_varos/djavolja-varos-druga-perspektiva.jpg" alt="Druga perspektiva">
                </a>
                <a class="lightbox" href="../img/djavolja_varos/djavolja-varos-glavna.jpg">
                    <img src="../img/djavolja_varos/djavolja-varos-glavna.jpg" alt="Djavolja-Varos-glavna">
                </a>

                <a class="lightbox" href="../img/djavolja_varos/reka.jpg">
                    <img src="../img/djavolja_varos/reka.jpg" alt="Reka">
                </a>
                
                <a class="lightbox" href="../img/djavolja_varos/reka-2.jpg">
                    <img src="../img/djavolja_varos/reka-2.jpg" alt="Reka-2">
                </a>

                <a class="lightbox" href="../img/djavolja_varos/djavolja-varos-from-back.jpg">
                    <img src="../img/djavolja_varos/djavolja-varos-from-back.jpg" alt="Djavolja-Varos-iza">
                </a>

    </div>
</div>

<script src="../js/loading.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>

<?php include '../include/footer.php'; ?>

</html>