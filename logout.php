<?php
                session_start();
                session_unset();
                session_destroy();

                echo '<script>
                alert("Logout Successful");
                </script>';
                
                header("Refresh:0; Login_main.php");
               
                    
                    exit();
?>