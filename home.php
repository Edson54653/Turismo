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
    
        <!-----home-Section starts------>
<section class="home-container">
    
 <div class="swiper  home-slider">

    <div class="swiper-wrapper">

    <div class="swiper-slide slide" style="background:url(images/songo-Tete.jpg) no-repeat">
        <div class="content">
             <span>Explore, Descubra, Viaje</span>
             <h3>Conheça Songo Em Tete</h3>
             <a href="package.php" class="btn">Descobrir Mais</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/bazaruto.jpg) no-repeat">
        <div class="content">
             <span>Explore, Descubra, Viaje</span>
             <h3>Conheça mais Lugares</h3>
             <a href="package.php" class="btn">Descobrir Mais</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/praia\ Mocambique.jpg) no-repeat">
        <div class="content">
             <span>Explore, Descubra, Viaje</span>
             <h3>Praias Incriveis em Moçambique</h3>
             <a href="package.php" class="btn">Descobrir Mais</a>
        </div>
    </div>
    
    </div>  
  
    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="auto"></div>

    </div>


</section>

        <!-----home-Section ends------>

    <!-----serviços-Section start------>
<section class="services-container">

    <h1 class="head-title">Nossos Serviços</h1>

    <div class="box-container-services">

        <div class="box-services">
            <img src="images/icon-1.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box-services">
            <img src="images/icon-2.png" alt="">
            <h3>Tour Guide</h3>
        </div>

        <!-- <div class="box-services">
            <img src="images/icon-3.png" alt="">
            <h3>Trekking</h3>
        </div> -->

        <div class="box-services">
            <img src="images/icon-4.png" alt="">
            <h3>Comp fire</h3>
        </div>

            <!-- <div class="box-services">
                <img src="images/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div> -->

        <div class="box-services">
            <img src="images/icon-6.png" alt="">
            <h3>Comping</h3>
        </div>
    </div>

</section>
    <!-----serviços-Section ends------>

     <!-----home About-Section starts------>

 <section class="about-home">
    <div class="image">

        <img src="images/cabo Delgado.webp" alt="">
    </div>

    <div class="about-content content">
        <h3>Sobre nos</h3>
        <p>Edson sit amet consectetur adipisicing elit. Harum suscipit nostrum necessitatibus voluptatum numquam. Nostrum veniam beatae ipsam corporis vitae, dignissimos, tenetur odit nesciunt amet asperiores a quam doloribus repellat!</p>

        <a href="about.php" class="btn">Leia Mais</a>
    </div> <br>

    

 </section>    
      <!-----home About-Section ends------>


          <!-----package-Section starts------>


<section class="package-container">
<h1 class="head-title">Nossos Pacotes</h1>

<div class="box-container">

  <div class="box  package ">
      <div class="image">
          <img src="images/niassa.webp" alt="">
      </div>
      
      <div class="content">
          <h3>Niassa</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus, reprehenderit, maxime aliquam illo nemo non molestiae molestias suscipit impedit ipsam eaque nostrum porro rem quisquam aperiam tenetur sed eos?</p>
           <a href="book.php" class="btn">Viaje agora</a>
      </div>
  </div>


  <div class="box  package ">
    <div class="image">
        <img src="images/hotel-pestana-bazaruto-inhambane.webp" alt="">
    </div>
    
    <div class="content">
        <h3>Pestana Bazaruto Inhambane</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus, reprehenderit, maxime aliquam illo nemo non molestiae molestias suscipit impedit ipsam eaque nostrum porro rem quisquam aperiam tenetur sed eos?</p>
         <a href="book.php" class="btn">Viaje agora</a>
    </div>
</div>

<div class="box  package ">
    <div class="image">
        <img src="images/maputo-mercado.webp" alt="">
    </div>
    
    <div class="content">
        <h3>Mercado em Maputo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus, reprehenderit, maxime aliquam illo nemo non molestiae molestias suscipit impedit ipsam eaque nostrum porro rem quisquam aperiam tenetur sed eos?</p>
         <a href="book.php" class="btn">Viaje agora</a>
    </div>
</div>
</div>
<div class="load-more"><a href="package.php" class="btn">Read more</a></div>
</section>
 <!-----package-Section ends------>

 <!-----Home afer Section starts------>
<section class="home_offer">
    <div class="content">
        <h3>Mais de 50% de desconto</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque odit labore perferendis perspiciatis illum sed inventore sequi aut, maiores exercitationem cumque, quisquam corporis tenetur nam ex sint cupiditate sit enim?</p>
        <a href="book.php?" class="btn">Viaje agora</a>
    </div>
</section>



 <!-----Home afer Section ends------>
 








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

 <script>
    var swiper = new Swiper(".home-slider", {
    loop:true,    
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

 </script>
</body>
</html>


