<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="content.css">
	<link rel="stylesheet" type="text/css" href="../course.css">
	<title>Display All Videos from database using php</title>
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
</head>
<body>

<header>
    <div id="menu" class="fas fa-bars"></div>
  <a href="../loginf.php" class="logo"><i class="fas fa-user-graduate"></i>Sasaki Gakkou</a>
  <nav class="navbar">
      <ul>
          <li><a href="../course.php">home</a></li>
          <li><a href="../course.php">about</a></li>
          <li><a href="../course.php">course</a></li>
          <li><a href="../course.php">discord</a></li>
          <li><a href="../course.php">contact</a></li>
          <li><a href="#"><img src="../icon.png" id="hihi" class="hihi"></a></li>
      </ul>
  </nav>
  <div id="login" class="fas fa-user-circle"></div>

</header>
<audio id="bgm">
     <source src="../m1.mp3" type="audio/mp3">
 </audio>
 <script>
     var bgm = document.getElementById("bgm");
     var icon = document.getElementById("hihi");

     icon.onclick=function(){
         if(bgm.paused){
            bgm.play();
            icon.src="../pause.png";
         }else{
             bgm.pause();
             icon.src="../icon.png";
         }
        
     }
 </script>


<!-- header section e -->
<div class="hero">
	<div class="container mt-3 mb-3">
		<h1><b>N5 Completed Resources</b></h1>
		<hr/>
				<a href="upload.php" class="bttn btn-primary mt-3">Upload a New Lesson</a>
				<hr/>
             
		<div class="row">
				<?php
				include("../conn.php");
					
				$q = "SELECT * FROM c3";

				$query = mysqli_query($connn,$q);
				
				while($row=mysqli_fetch_array($query)) { 
                    $title = $row['judul'];
					$name = $row['nama'];
					?>

                <div class="judul">
						<?php
						  echo($title);
						?>
					</div>

					<div class="col-md-4" id="video">
						<video width="100%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
					</div>
					

				<?php }
?>
</div>
				</div>
</body>
</html>