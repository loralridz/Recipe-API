<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //session_start(); //starts the session
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $conn = mysqli_connect("localhost", "root", "", "totoro");
    
    if(mysqli_connect_error()){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT UPassword FROM userdetails WHERE UserName ='".$email."'";
    $selectresult = mysqli_query($conn, $sql);

    $table_password = "";
    if(mysqli_num_rows($selectresult) > 0) //this condition checks if there is any existing username
    {
        while($row = mysqli_fetch_assoc($selectresult)) 
        {
            $table_password = $row['UPassword']; // password is retreived for the entered username
            echo ($table_password);
            if($password == $table_password)
                {
                    session_start();
                    $_SESSION['user'] = $email;
                    $_SESSION['loggedin'] = true;
                    header("location: index.php?username=".$email);
                    exit();
                }
            else
            {   echo '<script>
                alert("Password is incorrect");
                </script>';
                
                header("Refresh:0; Login_main.php");
               
                // Print '<script>document.getElementById("pass").innerHTML="Incorrect Password!"</script>;'; 
            }
        }
    }
    else
    {
        echo '<script>
                alert("User Name is incorrect");
                </script>';
                header("Refresh:0; Login_main.php");
                
               
        // print '<script>document.getElementById("uname").innerHTML="Incorrect Username!"</script>';
    }
}
?>