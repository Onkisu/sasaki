
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
  <a href="#" class="logo"><i class="fas fa-user-graduate"></i>Sasaki Gakkou</a>
  <nav class="navbar">
      <ul>
          <li><a href="#home">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#course">course</a></li>
          <li><a href="#discord">discord</a></li>
          <li><a href="#contact">contact</a></li>
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
<!-- home section -->
<section class="home" id="home">

  <h1>This is my japanese course</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, quasi facere! In excepturi sit tempora provident, totam laudantium at ad. Voluptas ipsa amet officia!
    Ducimus temporibus facilis quidem eligendi ipsa.</p>
   <a href="#"><button class="btn">get started</button></a>
   <div class="shape"></div>
</section>
<!-- end home -->
<!-- about -->
<section class="about" id="about">
<div class="image">
 <img src="konten2.jpg" alt="">
</div>

<div class="content">
   <h3>why choose us?</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        At atque dolorem consequatur doloremque, laudantium ratione 
        itaque ab! Nesciunt doloremque excepturi doloribus itaque similique
         iusto eaque reprehenderit et sit? Sint, iste.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsa quaerat in, consequuntur perferendis voluptatibus qui eligendi,
         aut deleniti cumque blanditiis mollitia consectetur debitis est ipsum. Sit temporibus delectus adipisci.</p>
         <a href="#"><button class="btn">Learn More</button></a>
</div>

</section>

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