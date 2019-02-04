
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

<body bgcolor="#FCFCFC">    
    <form action="login_check.php" method="get|post">
        <div id="page">
            <div id="tableContainer">   
                <div style="height: 30px;"></div>                
                <div id="tableTitle" align="center"> Sign In </div>                        
                <div id="tableSpacer"></div>
                <div id="tableCell" align="center">Username</div>
                <div id="tableCell" align="center"><input type="text" name="username"></div>            
                <div height=10px></div>
                <div id="tableCell" align="center">Password</div>
                <div id="tableCell" align="center"><input type="password" name="password"></div>                
                <?php
                session_start();
                if ($_SESSION['login_error']) {
                    echo "<div id='tableCell' align='center'>";
                    echo "<p align='center' style='color: red;'>Invalid Username/Password</p>";
                    echo "</div>";
                    $_SESSION['login_error'] = false;
                } 
                else {
                    echo "<div id='tableSpacer'></div>";
                }
                ?>                                               
                <div id="tableCell">
                    <input type="submit" value="Login">
                </div>    
                <div style="height: 5px;"></div>     
                <div style="height: 30px;" id="tableCell">
                    Not A Member?&nbsp;    
                    <a href="register.php">
                        Register
                    </a>
                </div>
                <div style="height: 5px;"></div>
            </div>   
            <div id="tableImage" align="center">
                <img width=175px src="test.png" align="center">
            </div>           
        </div>    
    </form> 
</body>

</html>