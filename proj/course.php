
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link google japanese fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600&display=swap" rel="stylesheet">
    <!-- link google  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="course.css">
    <!-- link js -->
   
</head>

<!-- header section s-->

<!-- end about -->











<body>

<header>
    <div id="menu" class="fas fa-bars"></div>
  <a href="loginf.php" class="logo"><i class="fas fa-user-graduate"></i>Sasaki Gakkou</a>
  <nav class="navbar">
      <ul>
          <li><a href="#home">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#course">course <i class="fas fa-caret-down"></i></a>
           
          <div class="dropdown_menu">
              <ul>
                  <li><a href="project - Copy/payment.php">Buy</a></li>
                  <li><a href="#">Quiz</a></li>
              </ul>
          </div>
        
        
        </li>


          <li><a href="#discord">discord</a></li>
          <li><a href="#contact">contact</a></li>
          <li><a href="#"><img src="icon.png" id="hihi" class="hihi"></a></li>
      </ul>
  </nav>
  <div id="login" class="fas fa-user-circle"></div>

</header>
<!-- header section e -->
<div class="hero">
      
</div>
<!-- login form -->
<div class="login-form">
    <form action="login.php" method="POST">

        <h3>login</h3>
        <input type="text" placeholder="username" class="box" id="usern" name="usern">
        <input type="password" placeholder="password" class="box" id="passw" name="passw">
        <p>forget your password?<a href="#" >click here</a></p>
        <p>don't have an account?
        <!-- <div class="reg" id="reg">register now</div>     -->
        <a href="#" id="reg" class="reg" onclick="regis()" >register now</a>
        <!-- <button type="button" class ="reg" id="reg">register now</button> -->
    </p>
        <input type="submit" class="btn" value="login">
        <i class="fas fa-times"></i>
     
    </form>
</div>



<!-- Register form -->
<div class="reg-form">
    <form action="register.php" method="POST">

        <h3>Register</h3>
        <input type="text" placeholder="username" class="box" id="usern" name="usern">
        <input type="password" placeholder="password" class="box" id="passw" name="passw">
        <p>Already have an account?<a href="#" onclick="tologin()">Sign in</a></p>
        <input type="submit" class="btn" value="register">
        <i class="fas fa-times"></i>

    </form>
</div>

  
 <audio id="bgm">
     <source src="m1.mp3" type="audio/mp3">
 </audio>
 <script>
     var bgm = document.getElementById("bgm");
     var icon = document.getElementById("hihi");

     icon.onclick=function(){
         if(bgm.paused){
            bgm.play();
            icon.src="pause.png";
         }else{
             bgm.pause();
             icon.src="icon.png";
         }
        
     }
 </script>


<!-- home section -->
<section class="home" id="home">

  <h1>This is my japanese course</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, quasi facere! In excepturi sit tempora provident, totam laudantium at ad. Voluptas ipsa amet officia!
    Ducimus temporibus facilis quidem eligendi ipsa.</p>
   <a href="#about"><button class="btn">get started</button></a>
   
   <div class="shape"></div>
</section>
<!-- end home -->
<!-- about -->
<section class="about" id="about">
<div class="image">
 <img src="about.png" alt="">
</div>

<div class="content">
   <h3>why choose us?</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        At atque dolorem consequatur doloremque, laudantium ratione 
        itaque ab! Nesciunt doloremque excepturi doloribus itaque similique
         iusto eaque reprehenderit et sit? Sint, iste.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsa quaerat in, consequuntur perferendis voluptatibus qui eligendi,
         aut deleniti cumque blanditiis mollitia consectetur debitis est ipsum. Sit temporibus delectus adipisci.</p>
         <a href="learn.php"><button class="btn">Learn More</button></a>
</div>

</section>



 <!-- course section -->
<section class="course" id="course">
 <h1 class="heading">Our Courses Levels</h1>
   <div class="boxcontainer">
   <div class="box">
    <img src="JLPT-N5.jpg" alt="">
    <h3 class="price">$40</h3>
    <div class="content">
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half"></i>
      </div>
      <a href="new_task/index.php" class="title">Learn for JLPT N5 exam</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laudantium, expedita aliquid a omnis facere quam, 
          quia non porro odio ipsa quidem dolor deserunt accusamus perferendis ut 
          quos enim perspiciatis.</p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> 2 hours </h3>
              <h3> <i class="far fa-calendar-alt"></i> 3 months </h3>
              <h3> <i class="fas fa-book"></i> 14 modules</h3>
          </div>
    </div>
  </div>

<div class="box">
    <img src="JLPT-N4.jpg" alt="">
    <h3 class="price">$44</h3>
    <div class="content">
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half"></i>
      </div>
      <a href="project - Copy/payment.php" class="title">Learn for JLPT N4 exam</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laudantium, expedita aliquid a omnis facere quam, 
          quia non porro odio ipsa quidem dolor deserunt accusamus perferendis ut 
          quos enim perspiciatis.</p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> 2 hours </h3>
              <h3> <i class="far fa-calendar-alt"></i> 3 months </h3>
              <h3> <i class="fas fa-book"></i> 14 modules</h3>
          </div>
    </div>
</div>

<div class="box">
    <img src="JLPT-N3.jpg" alt="">
    <h3 class="price">$49</h3>
    <div class="content">
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half"></i>
      </div>
      <a href="#" class="title">Learn for JLPT N3 exam</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laudantium, expedita aliquid a omnis facere quam, 
          quia non porro odio ipsa quidem dolor deserunt accusamus perferendis ut 
          quos enim perspiciatis.</p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> 2 hours </h3>
              <h3> <i class="far fa-calendar-alt"></i> 3 months </h3>
              <h3> <i class="fas fa-book"></i> 14 modules</h3>
          </div>
    </div>
</div>

<div class="box">
    <img src="JLPT-N2.jpg" alt="">
    <h3 class="price">$53</h3>
    <div class="content">
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half"></i>
      </div>
      <a href="#" class="title">Learn for JLPT N2 exam</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laudantium, expedita aliquid a omnis facere quam, 
          quia non porro odio ipsa quidem dolor deserunt accusamus perferendis ut 
          quos enim perspiciatis.</p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> 2 hours </h3>
              <h3> <i class="far fa-calendar-alt"></i> 3 months </h3>
              <h3> <i class="fas fa-book"></i> 14 modules</h3>
          </div>
    </div>
</div>

<div class="box">
    <img src="JLPT-N1.jpg" alt="">
    <h3 class="price">$60</h3>
    <div class="content">
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half"></i>
      </div>
      <a href="#" class="title">Learn for JLPT N1 exam</a>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laudantium, expedita aliquid a omnis facere quam, 
          quia non porro odio ipsa quidem dolor deserunt accusamus perferendis ut 
          quos enim perspiciatis.</p>
          <div class="info">
              <h3> <i class="far fa-clock"></i> 2 hours </h3>
              <h3> <i class="far fa-calendar-alt"></i> 3 months </h3>
              <h3> <i class="fas fa-book"></i> 14 modules</h3>
          </div>
    </div>
</div>

</div>
 </section>
 <!-- end course -->
 <!-- des discord -->
 <!-- <section class="des" id="des">

 </section> -->

<!-- des discord end -->

    <!-- Discord start -->
<section class="discord" id="discord">
<h1 class="heading">Join Our Discord Server</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore repudiandae consequuntur itaque illo,
     quisquam porro at voluptatem? Quibusdam beatae, quos quo quam libero voluptas numquam atque magni laborum vero maxime!</p>
     
     
     <!-- <img src="discord.png" alt="" class="disimg"> -->
     <a href="https://discord.gg/EadRjCyHCM"><button class="btn">Join Discord</button></a>
    
</section>




<!-- Discord End -->

<!-- contact start -->
<section class="contact" id="contact">
<h1 class="heading">contact us</h1>
<div class="row">
<form action="">
    <input type="text" placeholder="full name" class="box">
    <input type="email" placeholder="your e-mail" class="box">
    <input type="password" placeholder="your password" class="box">
    <input type="number" placeholder="your number" class="box">
    <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="Message"></textarea>
    <input type="submit" class="btn" value="send now">

</form>
 <div class="image">
     <img src="contact2.png" alt="">
 </div>
</div>

</section>

<!-- contact end -->
<!-- footer  -->
<div class="footer">
    <div class="box-container">
        <div class="box">
            <h3>branch locations</h3>
            <a href="">Indonesia</a>
            <a href="">Malaysia</a>
            <a href="">Japan</a>
            <a href="">Philiphine</a>
           
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="">home</a>
            <a href="">about</a>
            <a href="">course</a>
            <a href="">discord</a>
            <a href="">contact</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <p><i class="fas fa-map-marker-alt"></i>sumedang, indonesia 11010.</p>
            <p><i class="fas fa-envelope"></i>rakhabloods123@gmail.com</p>
            <p><i class="fas fa-phone"></i>+62-812-145-87150</p>
           
        </div>
    </div>
     <h1 class="credit">
         created by <a href="#">M.Rakha A</a> all rights reserved
     </h1>
</div>
<!-- footer end -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- js -->
    <script src="course.js"></script>
    <script>

        function regis(){
            $('.login-form').removeClass('popup');
           $('.reg-form').addClass('popup');
        }
    </script>
    <script>

        function tologin(){
            $('.reg-form').removeClass('popup');
           $('.login-form').addClass('popup');
        }
    </script>
     
     
</body>
</html>