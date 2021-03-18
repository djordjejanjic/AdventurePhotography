<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include '../include/scripts.php' ?>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responsive_style.css">
    <script src ="../js/contact.js"></script>
    <title>Djordje Janjic | Photography</title>
    <link rel="icon" 
      type="image/png" 
      href="../favicon.png">
</head>

<body>
<?php include 'menu.php' ?>

<div class="equip-bckg">

    <img class="topography" src="../assets/topography-bckg.png">
    <div class="text1">
        <p id="contact_p" style="margin-bottom: 35px;">Za preuzimanje i korišćenje fotografija, potrebno je odobrenje autora</p>
        <form action="https://formspree.io/f/meqpbpwz" method="POST">

          <label for="name">Ime i prezime:</label><br>
          <input type="text" class="name" name="name"><br>
          <label for="email" style="margin-top: 8px;">E-mail:</label><br>
          <input type="text" class="email" name="_replyto"><br>
          <label for="poruka"  style="margin-top: 8px;">Poruka:</label><br>
          <textarea name="message" class="poruka" placeholder="Poruka mora sadržati bar 10 karaktera..."></textarea><br>
            <div class="status" style=" display:block; margin: auto; margin-top: 8px; font-size: 15px; width: 70%;">
                
            </div>
          <input type="submit" class="btn1" value="Pošalji" style="margin-top: 25px; padding: 0 10 0 10;">
        </form>
        
    </div>
</div>

</body>

<?php include '../include/my_map.php'; ?>

<?php include '../include/footer.php'; ?>

</html>
