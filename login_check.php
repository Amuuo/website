<html>
    <body>    
        <?php
            
            session_start();

            $_SESSION['username'] = $_GET["username"];
            $_SESSION['password'] = $_GET["password"];

            $_SESSION["conn"] = new mysqli("localhost", $_SESSION['username'], $_SESSION['password'], "world");            
            
            if ($_SESSION["conn"]->connect_error) {        
                die("Connection failed: " . $_SESSION['conn']->connect_error);
                echo "Invalid User/Password";
                header("Location:login.php");
            } 
            else {
                header("Location:form.php");
                //echo "<script type='text/php' src='form.php'>";
            }
        ?>
    </body>
    <meta http-equiv="refresh"  >
</html>