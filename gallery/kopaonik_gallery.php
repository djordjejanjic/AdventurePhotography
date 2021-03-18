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
    
                <a class="lightbox" href="../img/kopaonik/pogled-sa-vrha.jpg">
                    <img src="../img/kopaonik/pogled-sa-vrha.jpg" alt="Pogled-sa-vrha">
                </a>
                
                <a class="lightbox" href="../img/kopaonik/pancicev-vrh.jpg">
                    <img src="../img/kopaonik/pancicev-vrh.jpg" alt="Pancicev-vrh">
                </a>
               
                <a class="lightbox" href="../img/kopaonik/djorov-most.jpg">
                    <img src="../img/kopaonik/djorov-most.jpg" alt="Djorov-most">
                </a>
                <a class="lightbox" href="../img/kopaonik/izlazak-sunca-kopaonik.jpg">
                    <img src="../img/kopaonik/izlazak-sunca-kopaonik.jpg" alt="Izlazak-sunca">
                </a>
                <a class="lightbox" href="../img/kopaonik/vodopad-jelovarnik.jpg">
                    <img src="../img/kopaonik/vodopad-jelovarnik.jpg" alt="Vodopad-Jelovarnik">
                </a>
                 
                <a class="lightbox" href="../img/kopaonik/nocno-nebo-kop.jpg">
                    <img src="../img/kopaonik/nocno-nebo-kop.jpg" alt="Nocno-nebo">
                </a>

                <a class="lightbox" href="../img/kopaonik/nebeske-stolice.jpg">
                    <img src="../img/kopaonik/nebeske-stolice.jpg" alt="Nebeske-stolice">
                </a>

                <a class="lightbox" href="../img/kopaonik/pogled-kop.jpg">
                    <img src="../img/kopaonik/pogled-kop.jpg" alt="Pogled-sa-Kopa">
                </a>

                <a class="lightbox" href="../img/kopaonik/gejzir.jpg">
                    <img src="../img/kopaonik/gejzir.jpg" alt="Gejzir">
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