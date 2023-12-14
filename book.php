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
      <h2 class="text-center">Book Your Decoration Plan!!! </h2>
    </div>

    <div class="w-50 m-auto">
      <form action="bookinginfo.php" method="post">
        <div class="form-group">
          <label>Person Name: </label><input type="text" name="person" >
        </div>
        <div class="form-group">
         <label>Gender: </label>

     Male<input type="radio" id="gender" name="gender" value="Male">
     Female<input type="radio" id="gender" name="gender" value="Female">
  </div>

         <div class="form-group">
          <label>Email: </label><input type="email" name="email" required>
        </div>
          <div class="form-group">
            <label>Address: <input type="address" name="address"></label>
          </div>

        <div class="form-group">
          <label>Function Name: </label>
              <select name="function_name" id="function_name" required>
        <option value="">--Select function name--</option>
        <option value="Birthday Party">Birthday party</option>
        <option value="Praposal decoraton">Praposal decoration</option>
        <option value="Wedding anniversary ">Wedding anniversary</option>
        <option value="Haldi">Haldi</option>
        <option value="Mehndi">Mehndi</option>
        <option value="Reception ">Reception</option>
        <option value="Ring ceremony">Ring ceremony</option>
        <option value="Baby shower">Baby shower</option>
    </select>
  </div>
          
        <div class="form-group">
          <label>Function Date: </label><input type="date" name="date" >
        </div>
        <div class="form-group">
          <label>Function Place: </label><input type="text" name="place" >
        </div>
        <div class="form-group">
          <label>Decoration Type: </label>
          <select name="decoration_type" id="decoration_type" required>
        <option value="">--Select Decoration_type--</option>
        <option value="Small decoration">Small decoration</option>
        <option value="Medium decoraton">Medium decoration</option>
        <option value="Large anniversary ">Large decoration</option>
        <option value="Balloon decoration">Balloon decoration</option>
        <option value="Festivals decoration">Festivals decoration</option>
      </select>
         </div>
            
        <div class="form-group">
          <label>Catering Service: </label><input type="text" name="food">
        </div>
        <div class="form-group">
          <label>Contact No.: </label><input type="text" name="contact">
        </div>

<button type="submit" class="btn btn-success">DONE</button>



       </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
