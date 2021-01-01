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

    <title>Totoro Kitchen</title>
    <link rel="shortcut icon" type="image/jpg" href="./assets/images/cooking-tools.png"/>
</head>

<body>
    <!-- HEADER START -->
    <nav class="navbar navbar-expand-lg navbar-dark header_footer" style="padding: 1.5rem 1rem;">
        <a class="navbar-brand text" style="font-size: 1.5em;" href="#">
            <!-- <img src="https://i.pinimg.com/originals/a4/fa/8c/a4fa8c0588f96c91989308c2448b095a.png" width="100"
                height="80" class="d-inline-block align-top" alt="" /> -->
            <!-- <p width="100"
                height="80" class="text">TK</p> -->
            Totoro's kitchen
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipeList.html">My Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- HEADER END -->

    <!-- php -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "recipeapi";

      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Failed to connect: ". mysqli_connect_error());
      }
      else{ 
        $sql = "INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success">
          <strong>Success!</strong> Your feedback has been sent successfully.
        </div>';
        }
        else{
            echo '<div class="alert alert-danger">
            <strong>Error!</strong> Your feedback is not submitted due to some technical issue.
          </div>';
        }

      }

    }

    
?>
    <!-- php -->

    <!-- Form div -->
    <div class="container d-flex justify-content-center align-items-center">
        <img src="./assets/images/undraw_feedback_h2ft.svg" alt="" class="svg">
        <form action="feedback.php" method="post">
            <h1 class="title text-center mb-4">Give us your feedback!</h1>
    
                <div class="form-group position-relative">
                    <input type="text" id="formName" class="form-control form-control-lg thick" placeholder="Your Name" name="name">
                </div>
    
                <div class="form-group position-relative">
                    <input type="email" id="formEmail" class="form-control form-control-lg thick" placeholder="Your Email" name="email">
                </div>
    
                <div class="form-group message">
                    <textarea id="formMessage" class="form-control form-control-lg" rows="5" placeholder="Your Message" name="message"></textarea>
                </div>
            
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" tabIndex="-1">Send message</button>
                </div>
        </form>
        
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
                            <li> <a class="link" href="about.html">About us.</a></li>
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




      <!-- BOOTSTRAP JS FILES -->
      <script type="text/javascript"  src="./assets/js/script.js" ></script>
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
</html>