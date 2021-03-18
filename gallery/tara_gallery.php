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
    
                 <a class="lightbox" href="../img/tara/banjska-stena.jpg">
                    <img src="../img/tara/banjska-stena.jpg" alt="Tornik-pogled">
                </a>
               
                <a class="lightbox" href="../img/tara/kucica-drina.jpg">
                    <img src="../img/tara/kucica-drina.jpg" alt="Tornik">
                </a>

                <a class="lightbox" href="../img/tara/kucica-na-drini-bez-camca.jpg">
                    <img src="../img/tara/kucica-na-drini-bez-camca.jpg" alt="Put-ka-Torniku">
                </a>
                <a class="lightbox" href="../img/tara/suma-mitrovac.jpg">
                    <img src="../img/tara/suma-mitrovac.jpg" alt="Stopica-pecina">
                </a>
                <a class="lightbox" href="../img/tara/zaovinsko-jezero-lepo-vreme.jpg">
                    <img src="../img/tara/zaovinsko-jezero-lepo-vreme.jpg" alt="Zicara">
                </a>
                 
                <a class="lightbox" href="../img/tara/zaovinsko-jezero.jpg">
                    <img src="../img/tara/zaovinsko-jezero.jpg" alt="Cigota">
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