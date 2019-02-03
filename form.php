<!DOCTYPE html>
<html> 
<link rel="stylesheet" type="text/css" href="login.css">   
<body bgcolor="#f2f2f2">


<form action="welcome.php" method="get|post">        
    <table>
        <tr><td colspan="3" align="center" style="font-size: 30px;"> Form </td></tr>
        <tr><td height=30 colspan="3"></td></tr>
        <tbody>
            <tr>
                <td align="right">City:</td>
                <td colspan="2" align="left"><input type="text" name="name"></td>
            </tr>
            <tr>
                <td align="right">CountryCode:</td>
                <td colspan="2" align="left"><input type="text" name="code"></td>
            </tr>
            <tr>
                <td align="right">District:</td>
                <td colspan="2" align="left"><input type="text" name="district"></td>
            </tr>
            <tr>
                <td align="right">Population:</td>            
                        <td><select name="operator">
                            <option value=">">></option>
                            <option value="=">=</option>
                            <option value="<"><</option>
                        </select></td>
                        <td><input type="text" name="population"></td>               
                </tr>
                <tr><td height=20 colspan="3"></td></tr>
                <tr>
                    <td align="center" colspan="3">
                        <input height=40 type="submit">        
                    </td>
            </tr>
        </tbody>
    </table> 
</form>       

</body>
</html>
</body>
</html>