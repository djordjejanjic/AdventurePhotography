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
                
                <a class="lightbox" href="../img/zlatibor/stopica-pecina.jpg">
                    <img src="../img/zlatibor/stopica-pecina.jpg" alt="Stopica-pecina">
                </a>
               
                <a class="lightbox" href="../img/zlatibor/tornik-zlatibor.jpg">
                    <img src="../img/zlatibor/tornik-zlatibor.jpg" alt="Tornik">
                </a>

                <a class="lightbox" href="../img/zlatibor/put-ka-torniku.jpg">
                    <img src="../img/zlatibor/put-ka-torniku.jpg" alt="Put-ka-Torniku">
                </a>
                
                <a class="lightbox" href="../img/zlatibor/tornik-pogled.jpg">
                    <img src="../img/zlatibor/tornik-pogled.jpg" alt="Tornik-pogled">
                </a>

                <a class="lightbox" href="../img/zlatibor/zlatiborzicara.jpg">
                    <img src="../img/zlatibor/zlatiborzicara.jpg" alt="Cigota">
                </a>
                 
                <a class="lightbox" href="../img/zlatibor/cigota.jpg">
                    <img src="../img/zlatibor/cigota.jpg" alt="Cigota">
                </a>
                
                <a class="lightbox" href="../img/zlatibor/kucica-zlatibor.jpg">
                    <img src="../img/zlatibor/kucica-zlatibor.jpg" alt="Kucica-Zlatibor">
                </a>
                
                <a class="lightbox" href="../img/zlatibor/cigota-covek-na-konju.jpg">
                    <img src="../img/zlatibor/cigota-covek-na-konju.jpg" alt="Cigota-Covek">
                </a>
                
                    
                <a class="lightbox" href="../img/zlatibor/kolibica-zlatibor.jpg">
                    <img src="../img/zlatibor/kolibica-zlatibor.jpg" alt="Kolibica-Zlatibor">
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