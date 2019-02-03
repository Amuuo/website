
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<body bgcolor="#f2f2f2">                                 
    <form action="login_check.php" method="get|post">                
        <table>            
            <thead>        
                <tr><td colspan="2" align="center" style="font-size: 30px;"> Sign In </td></tr>
                <tr><td height=30 colspan="2"></td></tr>
            </thead>
            
            <tbody align="center">    
                <tr>
                    <td align="right">User:</td>
                    <td align="left"><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td align="right">Password:</td>
                    <td align="left"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td height=40></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit"></td>
                </tr>
            </tbody>

        </table> 
    </form> 
</body>

</html>