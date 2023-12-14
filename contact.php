<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/dream_decore/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="nam">
    <img src="/dream_decore/photos/D (1).png">
  </div>
  <a class="navbar-brand" href="#">Dream Decor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="decoration.php">decoration type</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">contact us</a>
      </li>
      
       <li class="nav-item">
        <a class="btn btn-success" href="book.php">Book for Decoration</a>
      </li>
       
      
    </ul>
    
  </div>
</nav>
<section class="background firstsection">
        <h2 class="text-center text-big text-white">Contact Us</h2>
        <p class="text text-white text-center">Contact us for any problems.</p>
</section>
<section class="none">
  
    <!--heading--->
    <h2 class="text-center">Option to Contact</h2>
    <div id="none">
      <div class="flex-container">
      <div class="box">
         <!--form-->
         <img src="/dream_decore/photos/comment.png" alt="color_image">
         <br>
         <p class="center">give your feedback<br></p>
         <a href="problem.php" class="bottom">FEEDBACK</a>
      </div>
      <div class="box">
         <!--email-->
         <img src="/dream_decore/photos/email.png" alt="color_image">
         <br>
         <p class="center"> Use this Email to send us about the problem faced<br>abcd9856@gmail.com</p>
      </div>
      <div class="box">
         <!--form-->
         <img src="/dream_decore/photos/contact1.png" alt="color_image">
         <br>
         <p class="center">Use this contact no. to call us about the problem faced<br>Toll free no. 07272-25252</p>
      </div>
    </div>
    </div>
  
</section>
 <style>
   .background {
    background-image: url(/dream_decore/photos/con2.jpg);
   
    background-size: cover;
}
 
.firstsection {
    height: 90vh;
}
.text-big{
  font-weight: bold;
  padding-top: 180px;
  font-size: 75px;
}
.text{
  font-weight: 100px;
  font-size: 30px;
  padding-top: 75px;
}
.none{
  padding: 10px;
 }
#none .box{
  padding: 50px;
  margin: 12px 24px;
  border-radius: 30px;

}
#none .box img{
   margin-top: 20px;
    height: 100px;
    margin: auto;
    display: block;
    border-radius: 200px;
}
#none .box p{
  text-align: center;
}
.flex-container{
  display: flex;
  padding: 1px;
  margin: 1px;
}
.bottom{
  border: 1px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: green;
  margin-left: 110px;
}
 .main15{
    color: white;
    text-align: center;
    font-size: 25px;
  }
 </style>
<footer>
  <p class="p-3 bg-dark text-white text-center">@SAcreation</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>