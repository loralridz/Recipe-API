<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/style copy.css" />
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

    <div class="main">
        
        <section class="signup">
         
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="signup.php" class="signup-form">
                        <h2 class="form-title"> Create account </h2>
                        <div class="form-group">
                            <input type="text" class="form-input form-control form-control-lg thick" name="user_name" id="name" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input form-input form-control form-control-lg thick" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input form-input form-control form-control-lg thick" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input form-input form-control form-control-lg thick" name="re_password" id="re_password" placeholder="Re-enter Password"/>
                        </div>
                 
                        <div class="form-group">
                            <p><br></p>
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="Login_main.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    
     <!-- FOOTER START -->


     <div class="header_footer p-3 mb-2">
        <footer class="page-footer font-small pt-4">
            <div class="container-fluid text-center text-md-right">
                <div class="row">

                    <div class="col-md-3 mb-md-0 mb-3">
                        <img class="logo-footer"
                        src="https://i.ibb.co/svrvHTr/totoro-s-kitchen-02.png"
                        height="110px" width="133px" alt="Totoro's Kitchen" />
            <p  >Totoro's Kitchen</p> 

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
</body>
</html>