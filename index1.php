<!--  used apache XAMPP server to create an environment on local machine to run this website -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>animesh project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- font family -->
  <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Titillium+Web&display=swap" rel="stylesheet">

</head>
<body>
  
<?php include'header.php'; ?>

<!-- carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carou1.jpg" alt="nature" width="1100" height="500">
        <div class="carousel-caption">
          <h3>planets from earth</h3>
          <p>a beautiful view of planets and sun!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/carou2.jpg" alt="naturee" width="1100" height="500">
        <div class="carousel-caption">
          <h3>deer in the jungle</h3>
          <p>a bright deer spreading light!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/carou3.jpg" alt="natureee" width="1100" height="500">
        <div class="carousel-caption">
          <h3>boy looking at sun</h3>
          <p>a morning view brings new hope!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

<!-- about us  -->
  <section class="my-5">
    <div class="py-4">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid" >
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/ironman.jpg" alt="image not loading?" class="img-fluid aboutImg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">I am iron man!</h2>
          <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem repellendus dolores, possimus eaque aliquam ratione voluptatum enim fugiat aut id maxime non minima vitae in, corrupti accusamus sequi dolorum. Explicabo, suscipit laudantium eum ullam saepe quae labore tempora veritatis. Et iste non accusantium tempore esse, labore magni sed, quidem nobis velit impedit veniam.Totam at natus non.</p>
          <a href="about.php" class="btn btn-success"> know more..</a>
        </div>
      </div>
    </div>
  </section>

  <!-- services -->
  <section class="my-5" id="service">
    <div class="py-4">
      <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/scorpion.jpg" alt="card image">
            <div class="card-body">
              <h4 class="card-title">The Scorpion</h4>
              <p class="card-text">Mortal's combat Scorpion takes rebirth to take his revenge for the murderer of his family.</p>
              <a href="#" class="btn btn-primary"> See more.. </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/blackpantherred.jpg" alt="card image">
            <div class="card-body">
              <h4 class="card-title">The Black Panther</h4>
              <p class="card-text">Wakanda has the most advanced technology and vibranium metal, Wakanda Forever.</p>
              <a href="#" class="btn btn-primary"> See more.. </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/subzero.jpg" alt="card image">
            <div class="card-body">
              <h4 class="card-title">The Subzero</h4>
              <p class="card-text">Mortal's combat Subzero had killed the Scorpion and his family, for which he receives his fate.</p>
              <a href="#" class="btn btn-primary"> See more.. </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>  

  <!-- gallery -->
  <section class="my-5">
    <div class="py-4">
      <h2 class="text-center">Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/lambo.jpg" class="img-fluid pb-4">
        </div>      
      </div>
    </div>
  </section>

  <!-- contact us -->
  <section class="my-5" id="contact">
    <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div> 
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div> 
        <div class="form-group">
          <label>Contact No.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div> 
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
        </div> 
        <button type="submit" class="btn btn-success">Success</button>
      </form>
    </div>
  </section>

  <!-- footer -->
  <footer>
    <p class="p-3 bg-dark  text-white text-center">@theAnimeshKumarVashisth</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!--

for using image as a link
<a href="default.asp">
<img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
</a>



-->
