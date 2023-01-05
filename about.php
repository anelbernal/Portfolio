<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    </head>
    <body style="background-color:  rgb(241, 239, 221);" font-weight="" onload="askName()">
        <h1 align-center>About me</h1>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <header>
            <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <a href="#" class="navbar-brand" text-align="Center">Anel's Website</a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item active"><a href="WEEK2.PHP" class="nav-link">Home|</a></li>
            <li class="navbar-item"><a href="about.php" class="nav-link">About me|</a></li>
            <li class="navbar-item"><a href="AmbgResume.pdf" class="nav-link">Resume|</a></li>
            <li class="navbar-item"><a href="portfolio.php" class="nav-link">Portfolio|</a></li>
            <li class="navbar-item"><a href="contact.php" class="nav-link">Contact me|</a> </li>  
        </ul>
    </nav>
        </header>
        
        
<div id="home" style="background-color: salmon; text-align: rcenter; position: relative;>
            
            <img src="https://tinyurl.com/mpnr7t72" alt="Picture of a sunflower" height="auto" width="50%"> 
            <p>
                <h1>Hello! My name is Anel</h1>
                
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
        }
    </style>
</head>
<body>

<div class="container mt-3">
<div id="myCarousel" class="carousel slide">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li class="anelPortrait"></li>
    <li class="boltonBernalFamily"></li>
    <li class="labradorRetriever"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="meFirst.jpg" alt="anelPortrait" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="familyVisit-1280x642.jpg" alt="boltonBernalFamily" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="ladyBug-858x431.jpg" alt="labradorRetriever" width="450" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".anelPortrait").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".boltonBernalFamily").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".labradorRetriever").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
<script src="script.js"></script>
</body>
            Hello, my name is Anel you can also call me "Annie".  I was born in Mexico, but was raised in Utah since I was 6 years old. I enjoy baking on my free time, but shhhh... (don't tell anybody most of my recipes come from a box!) Coming from a broken family, my goal in life is to watch my child(ren) grow and experience life with them as "the parent that was always there for them." However I also am looking for financial freedom and therefore I know I have reached an end to my Dental Assisting career. Looking for opportunities I came across a program for Web Development through my local community college "Salt Lake Community College". Experiencing the 29 week program has been an amazing. I have learned to write raw undedited code on HTML, CSS, and PHP along with other programing lanuages. With this amazing career change I know there is room for me to grow and learn from peers, spend more time with my family and also help the community.

        </p>
        </div>
<div id="resume" style="background-color: #AA7DCE;">
            <h2>Resume</h2>
            <p>You can find a download version of my resume in the "Resume" tab</p>
            <?php 
            $education = ["Salt Lake Community College", "Granite Technical Institue", "Granger High School"];
            $names = ["Web Development Certificate", "Dental Assisting I & II Cerificate", "High School Diploma"];
$skills = ["HTML", "CSS", "JavaScript", "PHP", "Responsive web design","MySQL", "WordPress", "Git"];
$names = ["kevin", "Robert"];


function newList($arr) {
    echo "<ul>";
    foreach ($arr as $value) {
    echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}
newList($skills);
?>
</div>
        <div id="resume" style="background-color: #a2cba3;">
            <h2>These are my References:</h2>
                <p id="My Text">
                    <div>-Kevin Berrio</div>
                    <div>-Dahlia </div>
                    <div>-Lance </div>
                    <div>-Elizabeth </div>
                </p>
        </div>
<!-- Footer -->
<footer class="py-4 bg-dark">
    <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
</html>