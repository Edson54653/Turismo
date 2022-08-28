<?php  $indereco='';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- swiper-css para sliders -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!----------------------Css-File------------------------------------------------>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/book.css">
    <!-- font-awesome link -->
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Home</title>
</head>
<body >

    <!-----header-Section------>

<section class="header">

    <a href="home.php" class="logo">Moz Tour.</a>

    <nav class="navBar">
    <a href="home.php" >home</a>
    <a href="about.php" >Sobre Nos</a>
    <a href="package.php" >Nossos Pacotes</a>
    <a href="book.php" >Marque Viajem</a>
 </nav>
 <div id="menu-btn" class="fas fa-bars"></div>
</section>
    <!-----header-Section ends------>

<div class="heading" style="background:url(images/mocambique.png) no-repeat;">
    <h1>Book now</h1>
</div>


<!-- section booking starts -->
<section class="booking-container">

    <h1 class="head-title">Garanta a sua Viajem!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex-inputs">

            <div class="inputBox">
                <span>nome :</span>
                <input type="text" name="nome" placeholder="Digite o seu nome">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" name="email" placeholder="Digite o seu email">
            </div>

            <div class="inputBox">
                <span>Telefone :</span>
                <input type="number" name="telefone" placeholder="Digite o seu numero de Telefone">
            </div>

            <div class="inputBox">
                <span>indereço :</span>
                <input type="text" name="indereco" placeholder="Digite o seu indereco" value="<?php echo $indereco; ?>">
            </div>

            <div class="inputBox">
                <span>Onde vai :</span>
                <input type="text" name="locali" placeholder="Digite o sitio que quer visitar">
            </div>

            <div class="inputBox">
                <span>quatos visitantes :</span>
                <input type="number" name="visitante" placeholder="Digite o numero de visitantes">
            </div>

            <div class="inputBox">
                <span>Saida :</span>
                <input type="date" name="saida">
            </div>


            <div class="inputBox">
                <span>chegada :</span>
                <input type="date" name="chegada">
            </div>


        </div>


        <input type="submit" name="enviar" value="Submit" class="btn">
    </form>


</section>


<!-- section booking fim -->


    <!-- Footer sectio starts -->

<section class="footer">
<div class="box-container-footer">
       

        <div class="box-footer">
        <h3>Quick links</h3>
        <a href="home.php" >  <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php" >  <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php" >  <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php" >  <i class="fas fa-angle-right"></i> book</a>
    </div>

    

    <div class="box-footer">
    <h3>Extra links</h3>
    <a href="#" >  <i class="fas fa-angle-right"></i> As Question</a>
    <a href="#" >  <i class="fas fa-angle-right"></i> About Us</a>
    <a href="#" >  <i class="fas fa-angle-right"></i> Privacy Policy</a>
    <a href="#" >  <i class="fas fa-angle-right"></i> Terms of Use</a>
 
    </div>

    <div class="box-footer">
    <h3>Contact Information</h3>
    <a href="#" >  <i class="fas fa-phone"></i> (+258)842236192</a>
    <a href="#" >  <i class="fas fa-phone"></i> (+258)865098838</a>
    <a href="#" >  <i class="fas fa-envelope"></i>donthimas54@gmail.com</a>
    <a href="#" >  <i class="fas fa-map"></i> Maputo-Mozambique-Africa</a>

 
    </div>

    <div class="box-footer">
    <h3>Follow Us</h3>
    <a href="#" >  <i class="fab fa-facebook-f"></i> Facebook</a>
    <a href="#" >  <i class="fab fa-twitter"></i>Twitter</a>
    <a href="#" >  <i class="fab fa-instagram"></i>Instagram</a>
    <a href="#" >  <i class="fab fa-linkedin"></i> Linkedin</a>

 
    </div>


</div>
<div class="credito">Criado por <span>Edson de Célio Tomás</span> | all rights Reserved</div>
</section>

    <!-- Footer sectio ends -->

<!----------------------Swiper-js---------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

 <!----------------------Script-File---------------------------------------------->
 <script src="js/scripts.js"></script>
</body>
</html>


