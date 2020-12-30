<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Guitar Benter</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/style.css">
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </head>
  <body class="d-flex flex-column min-vh-100 bg-light">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12 p-0">
                  <header class="py-3 text-white bg-dark">
                      <h1 class="text-monospace text-center"><a href="index.html">Guitar Benter</a></h1>
                  </header>   
          </div>   
      </div>
      <div class="row">
        <nav class="navbar navbar-light">
          <form action="" method="">
              <input type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit"><img src="../resources/icons/lente.png" height="30" length="30"></button>
          </form>  
          <div class="float-right">
            <ul class="d-flex flex-wrap pt-3 nodot">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/profilo.png" height="30" length="30"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="../resources/icons/desideri.png" height="30" length="30"></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/notifica.png" height="30" length="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/carrello.png" height="30" length="30"></a>
                </li>
            </ul>
          </div>
        </nav> 
      </div>
      <div class="row">
        <div class="col-lg-4 col-12 col-md-6 pb-1 text-center bg-dark">
          <div id="articleCarousel" class="carousel slide overflow-hidden" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#articleCarousel" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#articleCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#articleCarousel" data-bs-slide-to="2"></li>
              <li data-bs-target="#articleCarousel" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../resources/img/PRS/front.jpg" class="h-100" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="../resources/img/PRS/back.jpg" class="h-100" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="../resources/img/PRS/zoom.jpg" class="h-100" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img src="../resources/img/PRS/head.jpg" class="h-100" alt="Fourth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#articleCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#articleCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-12 col-md-6 my-3 p-5">
          <h3>Gibson Les Paul Standard</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Quo omnis tempora ipsa, labore magnam obcaecati recusandae, 
            harum ipsam ducimus dolore animi adipisci reiciendis suscipit 
            exercitationem aspernatur consequuntur aliquid, similique quam!</p>
        </div>
        <div class="col-lg-1 col-0 p-0"></div>
        <div class="col-lg-3 col-12 col-md-12 my-3 py-4 px-3">
          <div class="border h-100">
            <div class="m-3 py-3 text-center border">
              <h2>99.90$</h2>
            </div>
            <div class="py-3 text-center">
              <button>Add to cart</button>
            </div>
            <div class="py-3 text-center">
              <button>Add to WhishList</button>
            </div>
            <div class="text-left p-4">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Voluptates ad quae aliquam quia harum veritatis quis labore.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-auto mx-0">
      <footer class="pt-3 text-white small bg-dark">
        <div class="row">
          <div class="col-md-3 col-6">
            <h6 class="text-monospace text-center">Where we are</h6>
            <p>Vivamus neque purus, euismod tristique interdum sed</p>
          </div>
          <div class="col-md-3 col-6">
            <h6 class="text-monospace text-center">Contacts</h6>
            <p>Vivamus neque purus, euismod tristique interdum sed</p>
          </div>
          <div class="col-md-3 col-6">
            <h6 class="text-monospace text-center">Infos</h6>
            <p>Vivamus neque purus, euismod tristique interdum sed</p>
          </div>
          <div class="col-md-3 col-6">
            <h6 class="text-monospace text-center">How we work</h6>
            <p>Vivamus neque purus, euismod tristique interdum sed</p>
          </div>
        </div>
      </footer>  
    </div>
  </body>
</html>