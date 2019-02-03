
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<body bgcolor="#dddddd">                             



<div>
    <form action="welcome.php" method="get|post">        
    User:        <input type="text"     name="username"><br>
    Password:    <input type="password" name="password"><br>
    City:        <input type="text"     name="name"><br>
    CountryCode: <input type="text"     name="code"><br>
    District:    <input type="text"     name="district"><br>
    Population:  <input type="text"     name="population">
    <select name="operator">
        <option value=">">></option>
        <option value="=">=</option>
        <option value="<"><</option>
    </select>
    <input type="submit">
    </form>       
</div>

</body>
</html>