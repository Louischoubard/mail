<!DOCTYPE html>
<html>
<head>
  <title>envoi mail</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/stylecontact.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

<section id="contact">
  <div class="inner-width">
    <h1 class="section-title">Contactez nous</h1>
    <div class="contact-info">
      <div class="item">
        <i class="fas fa-mobile-alt"></i>
        <a href="tel:+33761523131" style="color: #fff;">06 83 02 53 39</a>
      </div>

        <div class="item">
        <i class="fas fa-envelope"></i>
        <a href="mailto: Louis.choubard@gmail.com" style="color: #fff;">choubard.laurent@gmail.com</a>
      </div>

<div class="item adress">        
      <a href="#map" style="color: #fff;">
        <i class="fas fa-map-marker-alt"></i>    

        Cour-Cheverny
      </div>
  </a>
    </div>

    <form class="contact-form" method="post"> 
      <?php if(isset($_POST['envoimail'])){ include 'contact.php'; } ?>
      <input type="text" name="name" id="name" class="nameZone" placeholder="Votre nom">
      <input type="email" name="email" id="email" class="emailZone" placeholder="Votre mail">
      <input type="text" name="subject" id="subject" class="subjectZone" placeholder="Votre sujet">
      <textarea class="messageZone" name="message" id="message" placeholder="Votre message"></textarea>
      <font color="green"><?php if(isset($erreur) && !empty($erreur)){ echo $erreur;} ?></font>
      <input type="submit" name="envoimail" id="envoimail" value="Envoyer" class="btn">
    </form>
  </div>
</section>

<style type"text/css">
    a[href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"] {
            display: none;
        }
</style>

</body>
</html>