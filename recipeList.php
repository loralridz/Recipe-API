<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/media-queries.css" />

    <title>Totoro's Kitchen..(^_^)</title>
</head>

<body style="background-image: url(https://wallpaperaccess.com/full/260172.jpg);">
       <!-- HEADER START -->
       <nav class="navbar navbar-expand-lg navbar-dark header_footer" style="padding: 1rem 1rem;">
        
        <a class="navbar-brand " href="index.php">
            <img class="align-middle" src="https://i.ibb.co/svrvHTr/totoro-s-kitchen-02.png" alt="Totoro's-Kitchen" width="80"
            height="70"   ></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipeList.php">My Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <?php
        session_start();
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<li class="nav-item"><a class="nav-link" href="logout.php"> <p> Log_out </p></a></li>';
        } else {
            echo '<li class="nav-item"><a class="nav-link " href="Sign_up.php"> <p>Sign Up   </p> </a></li>
                
            <li class="nav-item"><a class="nav-link" href="Login_main.php"> <p> Login </p></a></li>';
        }
?>       
            </ul>
        </div>
    </nav>
    <!-- HEADER END -->

    <!-- About us-->

    <div class="container" style="    padding-top: 2rem;
    padding-bottom: 2rem;">
        <div class="row list-group" id="list-group">

            <!-- <a href="" class="list-group-item recipeItem">
              <h3 class="list-group-item-heading" id="recipe1">Recipe 1</h3>
              <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi necessitatibus asperiores magnam illum maiores expedita tempore vero ad est id eius, voluptates similique dolor ut explicabo! Similique at a accusamus!

              </p>
            </a>

            <a href="" class="list-group-item recipeItem">
                <h3 class="list-group-item-heading">Recipe 2</h3>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi necessitatibus asperiores magnam illum maiores expedita tempore vero ad est id eius, voluptates similique dolor ut explicabo! Similique at a accusamus!
                    
                </p>
              </a>
              <a href="" class="list-group-item recipeItem">
                <h3 class="list-group-item-heading">Recipe 3</h3>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi necessitatibus asperiores magnam illum maiores expedita tempore vero ad est id eius, voluptates similique dolor ut explicabo! Similique at a accusamus!
                    
                </p>
              </a>
              <a href="" class="list-group-item recipeItem">
                <h3 class="list-group-item-heading">Recipe 4</h3>
                <p class="list-group-item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi necessitatibus asperiores magnam illum maiores expedita tempore vero ad est id eius, voluptates similique dolor ut explicabo! Similique at a accusamus!
                    
                </p>
              </a> -->
          </div>
       
       
    </div>
<!-- FOOTER START -->


<div class="header_footer p-3 mb-2">
    <footer class="page-footer font-small pt-4">
        <div class="container-fluid text-center text-md-right">
            <div class="row">

                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- <img class="logo-footer"
                                src="https://i.pinimg.com/originals/a4/fa/8c/a4fa8c0588f96c91989308c2448b095a.png"
                                height="180px" width="200px" alt="Totoro's Kitchen" /> -->
                    <p class="text" style="top:20% ;">TOTORO's Kitchen</p>

                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <ul class="list-unstyled">
                        <li> Learn more. </li>
                        <li> <a class="link" href="about.php">About us.</a></li>
                        <li>
                            <a class="link" href="#">kitchen@Totoro.pk</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-5 mb-4 md-4 mb-4 ">
                    <h5>Connect to us..</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="facebook.com"><i class="fab fa-facebook mr-md-5 mr-3 fa-2x link"></i></a> <br>
                            <a href="Twitter.com"><i class="fab fa-twitter mr-md-5 mr-3 fa-2x link"></i></a> <br> <a
                                href="instagram.com"><i class="fab fa-instagram mr-md-5 mr-3 fa-2x link"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<div class="footer-copyright text-center py-3 text_header">
    TOTORO's KITCHEN.. <br>@All Rights Reserved.
</div>
</footer>



    <!-- FOOTER END -->

    <!-- BOOTSTRAP JS FILES -->
    <script type="text/javascript"  src="./assets/js/myRecipes.js" ></script>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</body>

</html>