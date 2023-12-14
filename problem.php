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
        <a class="nav-link" href="contact.php">contact us</a>
      </li>
      
       <li class="nav-item">
        <a class="btn btn-success" href="book.php">Book for Decoration</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">FEEDBACK </h2>
    </div>

    <div class="w-50 m-auto">
      <form action="probleminfo.php" method="post">
        <div class="form-group">
          <label>Person Name</label>
          <input type="text" name="person" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Moblie no.</label>
          <input type="text" name="number" placeholder="enter 10 digit no." pattern="[0-9]{10}" required>
        </div>
       <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="comment">
          </textarea>
        </div>
       <button type="submit" class="btn btn-success">DONE</button>
      </form>
    </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@SAcreation</p>
</footer>
<style>
  .main15{
    color: white;
    text-align: center;
    font-size: 25px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>