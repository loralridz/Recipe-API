<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name=$_REQUEST["user_name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
   // console.log("1st");

    $conn = mysqli_connect("localhost", "root", "", "totoro");
    if(mysqli_connect_error()){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $bool = true;
    $sql = "SELECT * FROM userdetails";
    $selectresult = mysqli_query($conn, $sql);

    if(mysqli_num_rows($selectresult) > 0){
        while($row = mysqli_fetch_assoc($selectresult)) {
            $db_email= $row["UserName"];
            if($db_email == $email)
            {
                echo '<script>document.getElementById("uname").innerHTML="Username has been taken!"</script>';
                $bool = false;

            }
        }
    }
    else{
        echo "0 results";
    }


    if ($bool)
    {
        $insert = "INSERT INTO userdetails (UserName,UPassword,Email) VALUES ('$user_name', '$password', '$email')";

        if(mysqli_query($conn, $insert)){
            echo '<script>alert("SIGNUP SUCCESSFUL!")</script>'; 
            }
        else{
            echo '<script>alert("SIGNUP FAILED!")</script>';
        }
    }
mysqli_close($conn);
header("location: Login_main.php?");
}
?>