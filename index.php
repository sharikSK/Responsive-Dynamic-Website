<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

 


</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SNORLAX</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/hanny-naibaho-aWXVxy8BSzc-unsplash.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
             <img class="d-block w-100" src="images/marcela-laskoski-YrtFlrLo2DQ-unsplash.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/simon-noh-0rmby-3OTeI-unsplash.jpg" alt="Third slide">
        </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <center><h3>About Us</h3></center>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/c-d-x-PDX_a_82obo-unsplash.jpg" class="img-fluid aboutimg ">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>I am Sharique Shaikh</h2>
                    <p class="py-5">
                    Our Entertainment division conceptualised and executed India’s first full-scale two-day heavy metal festival in Mumbai, bringing down several international and Indian bands to play across three stages.
                    </p>
                    <a href="about.php" class="btn btn-success">check More</a>
                </div>
            </div>
        </div>
</section>

<section class="my-5">
    <div class="py-5">
        <center><h3>GALLARY</h3></center>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 400px;">
                         <img  class="card-img-top" src="images/kobu-agency-3hWg9QKl5k8-unsplash.jpg">
                    
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </div>



            </div>

            <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 400px;">
                        <img  class="card-img-top" src="images/kobu-agency-3hWg9QKl5k8-unsplash.jpg">
                    
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>



            </div>

            <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 400px;">
                         <img  class="card-img-top" src="images/kobu-agency-3hWg9QKl5k8-unsplash.jpg">
                    
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>



            </div>

        </div>
    <br>
    <br>
    <center>
        <div>
            <form action="userinfo.php method="post">
                <div class="form-group" >
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
            </form>
        </div>
    </center>   

    <center>
        <div>
            <form action="userinfo.php method="post">
                <div class="form-group" >
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
            </form>
        </div>
    </center>

    <center>
        <div>
            <form action="userinfo.php method="post">
                <div class="form-group" >
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
            </form>
        </div>
    </center>

    <center>
        <div>
            <form action="userinfo.php method="post">
                <div class="form-group" >
                    <label>Comment</label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </center>

    <br>

    <footer>
    <center><p class="p-3 bg-dark text-white">@ShariqueShaikh</p></center> 
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>